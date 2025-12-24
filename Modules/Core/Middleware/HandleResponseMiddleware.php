<?php
namespace Modules\Core\Middleware;
use Illuminate\Support\Facades\Route;

use Closure;
use Response;
class HandleResponseMiddleware {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
      $response = $next($request);

      if (method_exists($response, 'header')) {
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Headers', 'X-Requested-With, Origin, Content-Type, Accept, Authorization');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, DELETE, PATCH, PUT');
        $response->header('Access-Control-Allow-Credentials', 'true');
      }

      // 处理200响应加code加data外壳
      if (method_exists($response, 'status') && $response->status() === 200) {

        if (!$request->is('payment-callback/*')) {
          $response->setContent([
            'version' => 'v1.0 https://test.popolive.net',
            'code' => 0,
            'message' => '',
            'data' => json_decode($response->content(), true)
          ]);
        }
      }

      // 测试环境下打印出执行时间超出30毫秒的sql
      if (env('APP_DEBUG')) {
        $logs = \DB::getQueryLog();
        $logs = collect($logs);

        $queryTotal = count($logs);
        $queryTime = $logs->sum('time');

        if ($queryTotal >= 30 || $queryTime > 100) {
          $path = $request->path();
          \Log::error('查询 ' . $queryTotal . '次 ' . $queryTime . '毫秒  /' . $path);
        }



        foreach ($logs as $log) {
          // if (substr($log['query'], 0, 6) === 'update') {
            // \Log::error($log[]);
          // }

          if ($log['time'] > 50) {
            \Log::error($log);
          }
        }

        if ($queryTotal > 50) {
          \Log::channel('query')->error('总耗时' . $queryTime . 'ms，开始记录');
          \Log::channel('query')->error('start ======>');
          $i = 1;
          foreach ($logs as $log) {
            \Log::channel('query')->error($i++ . ' ===> ' . $log['time'] . 'ms => ' . @$log['query']);
          }
          \Log::channel('query')->error('end ======>');
        }
      }

      return $response;
  }

}
