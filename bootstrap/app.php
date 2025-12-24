<?php
require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();
/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/
$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->instance('path.config', app()->basePath() . DIRECTORY_SEPARATOR . 'config');
$app->instance('path.storage', app()->basePath() . DIRECTORY_SEPARATOR . 'storage');

$aliases = [
	'Illuminate\Support\Facades\Auth' => 'Auth2',
    'Illuminate\Support\Facades\Notification' => 'Notification',
	'Modules\Core\Facades\ThrowException' => 'ThrowException',
    'Modules\Core\Facades\Auth' => 'Auth',
    'Modules\Core\Facades\Tool' => 'Tool',
    'Modules\Core\Facades\InnerMessage' => 'InnerMessage',
    'Modules\Core\Facades\Setting' => 'Setting',
    'Modules\Core\Facades\Miniapp' => 'Miniapp',
    'Modules\Core\Facades\LogService' => 'LogService',
    'Modules\Core\Facades\Wechat' => 'Wechat',
    'Modules\Core\Facades\ByteDance' => 'ByteDance',
    'Modules\Core\Facades\Kuaishou' => 'Kuaishou',
    'Modules\Core\Facades\Alipay' => 'Alipay',
    'Modules\Core\Facades\Payment' => 'Payment',
    'Modules\Core\Facades\Stats' => 'Stats',
    'Modules\Core\Facades\SMS' => 'SMS',
    'Modules\Core\Facades\Node' => 'Node',
    'Modules\Core\Facades\Platform' => 'Platform',
    'Modules\Core\Facades\Asset' => 'Asset',
    'Overtrue\LaravelWeChat\Facade' => 'EasyWeChat',
    'Jenssegers\Agent\Facades\Agent' => 'Agent',
    'SimpleSoftwareIO\QrCode\Facades\QrCode' => 'QrCode',
];

$app->withFacades(true, $aliases);
$app->withEloquent();

$app->bind('path.public', function() {
 return __DIR__ . '/../public/';
});

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/
$app->middleware([
    Modules\Core\Middleware\RemoveEmptyParams::class,
    Modules\Core\Middleware\HandleResponseMiddleware::class,
    Modules\Core\Middleware\AuthMiddleware::class,
]);
// $app->routeMiddleware([
//     'auth' => App\Http\Middleware\Authenticate::class,
// ]);
/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/
// $app->register(App\Providers\AppServiceProvider::class);
// $app->register(App\Providers\AuthServiceProvider::class);
// $app->register(App\Providers\EventServiceProvider::class);
$app->configure('env');
$app->configure('modules');
$app->configure('sms');
$app->configure('map');
$app->configure('order');
$app->configure('asset');
$app->configure('express');
$app->configure('area');
$app->configure('templateMessage');
$app->configure('subscribeMessage');
$app->configure('byteDance');
$app->configure('kuaishou');
$app->configure('alipay');

$providers = [
    Illuminate\Notifications\NotificationServiceProvider::class,
    Illuminate\Redis\RedisServiceProvider::class,
    Dingo\Api\Provider\LumenServiceProvider::class,
    \Nwidart\Modules\LumenModulesServiceProvider::class,
    Overtrue\LaravelFilesystem\Qiniu\QiniuStorageServiceProvider::class,
    Overtrue\LaravelFilesystem\Cos\CosStorageServiceProvider::class,
    Overtrue\LaravelWeChat\ServiceProvider::class,
    Yansongda\LaravelPay\PayServiceProvider::class,
    Jenssegers\Agent\AgentServiceProvider::class,
    // Jenssegers\Mongodb\MongodbServiceProvider::class,
    Jacobcyl\AliOSS\AliOssServiceProvider::class,
    Maatwebsite\Excel\ExcelServiceProvider::class,
    SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,
    Dcat\Laravel\Database\WhereHasInServiceProvider::class,
];

foreach ($providers as $provider) {
    $app->register($provider);
}


/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/
// $app->router->group([
//     'namespace' => 'App\Http\Controllers',
// ], function ($router) {
//     require __DIR__.'/../routes/web.php';
// });

return $app;