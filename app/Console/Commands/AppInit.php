<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use \Modules\Admin\Entities\Admin;
use \Modules\Role\Entities\Role;
use \Modules\User\Entities\User;

class AppInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init {phone : 管理员手机号} {password : 管理员密码}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '初始化你的项目';

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
        // 创建管理员角色
        // $roleInfo = [
        //     'name' => '超级管理员角色',
        //     'description' => '最高权限超级管理员角色',
        //     'type' => 'admin'
        // ];
        // $role = Role::create($roleInfo);
        // $role->syncPermissions(['manage_edit']);

        // // 创建管理员权限
        // $phone = $this->argument('phone');
        // $password = md5($this->argument('password'));
        // $adminInfo = [
        //     'name' => '系统管理员',
        //     'phone' => $phone,
        //     'password' => $password,
        // ];
        // $admin = Admin::create($adminInfo);
        // $admin->syncRoles([$role->id]);


        // // 创建用户
        // $userList = [
        //     [
        //         'name' => 'Smile',
        //         'headimg' => 'https://cdn2.hquesoft.com/box/headimg/h1.jpg'
        //     ],
        //     [
        //         'name' => '岁月静好',
        //         'headimg' => 'https://cdn2.hquesoft.com/box/headimg/h2.jpg'
        //     ],
        //     [
        //         'name' => '神木犬',
        //         'headimg' => 'https://cdn2.hquesoft.com/box/headimg/h3.jpg'
        //     ],
        //     [
        //         'name' => '抽烟小猫',
        //         'headimg' => 'https://cdn2.hquesoft.com/box/headimg/h4.jpg'
        //     ],
        //     [
        //         'name' => '蜡笔小新子',
        //         'headimg' => 'https://cdn2.hquesoft.com/box/headimg/h5.jpg'
        //     ],
        // ];

        // foreach ($userList as $user) {
        //     // 创建用户
        //     User::create($user);
        // }
    }
}