<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

use Modules\Order\Entities\Cron;

use Illuminate\Support\Facades\File;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // \App\Console\Commands\AppInit::class,
        \App\Console\Commands\AppUpdate::class,
        \App\Console\Commands\CleanDB::class,
        \App\Console\Commands\AppUpdateToV5::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $path = app()->basePath() . '/Modules';
        $dirs = File::directories($path);

        foreach ($dirs as $dir) {
            $temp = explode('/', $dir);

            $class = "\\Modules\\" . end($temp) . "\\Cron";

            if (class_exists($class)) {
                // \Log::error('运行' . $dir . '模块的定时任务');
                (new $class())->handle($schedule);
                // (new $class())->handle($schedule);
            }
        }

    }
}
