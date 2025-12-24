<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use \Modules\Update\Entities\UpdateToV5;

class AppUpdateToV5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-v5';

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
        $updateCli = new UpdateToV5();
        $updateCli->update($this);
    }
}