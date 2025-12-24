<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;

use Imagick;
use ImagickDraw;
use Miniapp;
use ImagickPixel;

use Storage;

class Poster extends Model
{
	static public function round($image, $width, $height, $radiu)
	{
		$image->thumbnailImage($width, $height, true);

		// create mask image
		$mask = new Imagick();
		$mask->newImage($width, $height, new ImagickPixel('transparent'), 'png');
		// create the rounded rectangle
		$shape = new ImagickDraw();
		$shape->setFillColor(new ImagickPixel('black'));
		$shape->roundRectangle(0, 0, $width, $height, $radiu, $radiu);
		// draw the rectangle
		$mask->drawImage($shape);
		// apply mask
		$image->compositeImage($mask, Imagick::COMPOSITE_DSTIN, 0, 0);

		return $image;
	}

	static public function drawInvitePoster($user)
	{
		$defaultHeadimg = 'http://hquesoft.oss-cn-shenzhen.aliyuncs.com/test/OIP.jpg';

		$bg = new Imagick(resource_path('images/share_bg.jpg'));

		// qrcode
		$qrcodeBlob = Miniapp::get('default')->app_code->get('pages/index/index?inviter=' . $user->uuid, [
			'is_hyaline' => true
		]); 
		$qrcode = new Imagick();
		$qrcode->readimageblob($qrcodeBlob);
		$qrcode->thumbnailImage(350, 350, true);

		$bg->compositeImage($qrcode, Imagick::COMPOSITE_OVER, 840, 1250);
		$headimg = new Imagick($user->headimg ?: $defaultHeadimg);
		$headimg = Poster::round($headimg, 200, 200 , 100, 100);

		$bg->compositeImage($headimg, Imagick::COMPOSITE_OVER, 20, 20);

		// 文字绘制
		$fontPath = resource_path('fonts/fzltdh.ttf');
		$draw  = new ImagickDraw();
		$draw->setFontSize(62);//设置字体大小
        $draw->setFillColor('#3A2C85');//设置字体颜色
        $draw->setTextEncoding('UTF-8');
        $draw->setFont($fontPath);
        $text = $user->name . '邀请你来玩抽盒';
        $bg->annotateImage($draw, 10, 300, 0, $text);

		// $bg->setImageFormat('jpg'); //设置图片的格式为png

        $disk = Storage::disk('oss');
        $name = 'images/' . str_random(32) . '.jpg';
        $disk->put($name, $bg->__toString());
        $url = $disk->url($name);

        $user->invite_poster = $url;
        $user->save();
        \Log::error($user->id);
        \Log::error($url);
        return $url;
	}
}
