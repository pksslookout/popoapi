<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;
use ThrowException;

class Setting extends Model
{
    protected $guarded = [];
    protected $table = 'settings';

    static public $resourceName = '设置';

    public function setContentAttribute($value)
    {
        if (is_array($value))
            $value = json_encode($value,  JSON_UNESCAPED_UNICODE) ;
        $this->attributes['content'] = $value;
    }

    public function getContentAttribute($value)
    {
        if ($this->content_type === 0)
            $value = json_decode($value, true);
        elseif ($this->content_type === 2)
            $value = intVal($value);

        return $value;
    }
}
