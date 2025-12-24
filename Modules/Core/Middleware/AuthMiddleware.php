<?php 
namespace Modules\Core\Middleware;

use Closure;
use Auth;
use ThrowException;

class AuthMiddleware {
	public function handle($request, Closure $next)
	{
        Auth::init($request);

        // 淘宝小程序由于各种参数限制，需要把所有参数隐藏到action字段中，现在需要解压出来
        if (Auth::platformType()  ===  'ali') {
            if ($request->input('action')) {
                $params = json_decode($request->action, true);

                foreach ($params as $key => $value) {
                      $request->offsetSet($key, $value);
                }
            }
        }

        if ($request->is('admin-api/*')) {
        	// 登陆时不需要tokens

            $isNeedLogin = !$request->is('admin-api/login/*') 
            && !$request->is('admin-api/export/*') && !$request->is('admin-api/public/*') && !$request->is('admin-api/platform/*');

            if ($isNeedLogin) {
                $admin = Auth::requireLoginAdmin();
                if (!$request->isMethod('get') && $admin->is_readonly)
                    ThrowException::Conflict('更改失败, 体验帐号暂无更改数据权限');
            }
        } 

        return $next($request);
    }
}