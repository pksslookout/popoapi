<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

use Cache;
use ThrowException;


class ToolService
{
    // 原子锁
    public function lock($key, $second = 60)
    {
        // 已有缓存
        if (Cache::get($key)) {
            return false;
        }

        $locker = Cache::lock($key, 5);

        // 先用原子锁占位
        if (!$locker->get()) {
            return false;
        }

        // 再用redis缓存占位
        Cache::put($key, 1, $second);

        // 释放原子锁
        $locker->release();

        return true;
    }

    // 释放原子锁
    public function release($key)
    {
        Cache::forget($key);
    }
}
