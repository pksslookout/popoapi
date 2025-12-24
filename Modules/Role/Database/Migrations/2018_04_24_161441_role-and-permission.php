<?php

// use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleAndPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->comment = '角色表';
            
            $table->increments('id');
            $table->uuid('uuid')->index();
            $table->string('code', 100)->index()->nullable()->comment('代码');
            $table->string('name', 100)->index()->comment('角色名');

            $table->string('type', 20)->index()->comment('角色类型, admin为后台角色 user为前台角色'); 

            $table->string('description')->nullable()->comment('描述');
            // $table->tinyInteger('member_total', 0)->default(0);  // 角色类型 0为平台后台角色， 1为租户后台角色， 2为普通用户角色
            $table->softDeletes();
            $table->timestamps();
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->comment = '权限表';
            
            $table->increments('id');
            $table->uuid('uuid')->index();
            $table->string('code', 100)->index()->nullable()->comment('代码');
            $table->string('name', 100)->index()->comment('权限名');

            $table->string('type', 20)->index()->comment('类型, admin为后台权限 user为前台权限');  // 角色类型 0为平台后台角色权限， 1为租户后台角色权限， 2为普通用户角色权限

            $table->integer('parent_id')->index()->nullable()->comment('父权限');  // 父权限

            $table->string('description')->nullable()->comment('描述');
            $table->softDeletes();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->comment = '权限->角色关联表';
            
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });


        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('role_relations', function (Blueprint $table) {
            $table->comment = '用户->角色关联表';
            

            $table->integer('role_id')->unsigned();
            $table->integer('target_id')->unsigned();
            $table->string('type', 20)->index();

            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['target_id', 'role_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        // Schema::dropIfExists('admin_role');
        // Schema::dropIfExists('tenant_admin_role');
        // Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('role_relations');
        Schema::dropIfExists('roles');
    }
}
