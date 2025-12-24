<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;

class SubscribeRecord extends Model
{
    protected $guarded = [];
    protected $table = 'subscribe_records';

    protected $casts = [
        'option' => 'json',
    ];

    public function user() 
    {
    	return $this->belongsTo('\Modules\User\Entities\User', 'user_id');
    }

    static public $resourceName = '订阅记录';
}
