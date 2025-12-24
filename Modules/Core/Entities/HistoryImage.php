<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;

class HistoryImage extends Model
{
    protected $guarded = [];
    protected $table = 'history_images';

    protected $casts = [
    ];

    static public $resourceName = '历史图片';

    static public function beforeGetList($options)
    {
    	if (@$options['tag_id']) {
    		$options['where']['category_id'] = $options['tag_id'];
    	}

    	return $options;
    }

    // 批量保存图片历史
    static public function saveList($urls, $categoryId = NULL)
    {
        $list = [];

        foreach ($urls as $url) {
            array_push($list, [
                'uuid' => uniqid(),
                'url' => $url,
                'category_id' => $categoryId
            ]);
        }

        self::insert($list);
    }
}
