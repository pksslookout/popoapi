<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use \Modules\Update\Entities\UpdateCli;

class AppUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新项目';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        // 调用其它命令进行数据库迁移合并
        $this->call('module:migrate');

        $updateCli = new UpdateCli();
        $updateCli->update($this);

        // 检查安装supervisor
        $isInstallSupervisor = exec('rpm -qa | grep supervisor');

        if ($isInstallSupervisor) {
            \Log::error('已安装supervisor');
        }
        else {
            \Log::error('没有安装有supervisor，尝试进行安装');
            $res = exec('yum install -y supervisor');
            \Log::error('安装supervisor结果:' . $res);
        }

        // 检查supervisor配置文件是否存在 
        $configFilePath = '/etc/supervisord.d/laravel-' . env('APP_NAME') . '.ini';
        // if (!file_exists($configFilePath)) {
        print('supervisord文件不存在，创建中:' . $configFilePath);

        // 创建supervisord配置文件
        $appPath = base_path();
        $configStr = '[program:' . env('APP_NAME') . '_1]
process_name=' . 'default' . '_%(process_num)02d
command=php ' . $appPath . '/artisan queue:work --sleep=1 --tries=3
autostart=true
autorestart=true
user=root
numprocs=5
redirect_stderr=true
stdout_logfile=' . $appPath . '/storage/logs/supervisor.log';

        file_put_contents($configFilePath, $configStr);
        // }

        // 检查supervisor配置文件是否存在 
        $configFilePath = '/etc/supervisord.d/laravel-' . env('APP_NAME') . '-user-stats.ini';
        // if (!file_exists($configFilePath)) {
        print('supervisord文件不存在，创建中:' . $configFilePath);

        // 创建supervisord配置文件
        $appPath = base_path();
        $configStr = '[program:' . env('APP_NAME') . '_2]
process_name=' . 'update_user_stats' . '_%(process_num)02d
command=php ' . $appPath . '/artisan queue:work --queue=update_user_stats --sleep=1 --tries=3
autostart=true
autorestart=true
user=root
numprocs=10
redirect_stderr=true
stdout_logfile=' . $appPath . '/storage/logs/supervisor.log';

        file_put_contents($configFilePath, $configStr);
        // }

        // 重启supervisor进程
        $res = exec('service supervisord restart && supervisorctl stop all && supervisorctl start all');
        \Log::error('重启supervisor结果:' . $res);

        exec("[ -e " . base_path('public') . "/.user.ini" . " ] && chattr -i " . base_path('public') . "/.user.ini");
        exec("chmod -R 777 " . base_path('storage'));
        exec("chmod -R 777 " . base_path('bootstrap'));
        exec("chmod -R 777 " . base_path('public'));
    }
}