<?php

namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;

use Cache ;
use ThrowException;
use \Modules\User\Entities\Message;

use Auth;

// 站内信service
class InnerMessageService
{
	// 给某用户发送站内信
	public function send($user, $options = [])
	{
		$node = @$options['node'];
		return Message::create([
			'uuid' => uniqid(),
			'user_id' => $user->id,
			'link' => @$options['link'],
			'type' => @$options['type'],
			'title' => @$options['title'],
			'sub_title' => @$options['sub_title'],
			'node_type' => $node ? $node->getType('node_type') : NULL,
			'node_title' => @$node->title,
			'node_uuid' => @$node->uuid,
		]);
	}
}
