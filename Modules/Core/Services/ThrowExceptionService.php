<?php

namespace Modules\Core\Services;
use App\Exceptions\HttpExceptions\BadRequestException;

//use Illuminate\Support\Facades\Redis as Redis;
// use Redis ;
use Setting;

class ThrowExceptionService
{
    public function NotFound($message="资源不存在", $code=10011)
    {
        throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException($message, null, $code);
    }

    public function LoginError($message="登录失败", $code=10102)
    {
        throw new \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException('', $message, null, $code);
    }

    public function Conflict($message='资源冲突', $code=10031)
    {
        throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($message, null, $code) ;
    }

    public function ScoreNotEnought($message=NULL, $code=40021)
    {
        $message = $message ?: Setting::scoreAlias() . '不足~';
        
        if (!@Setting::get('sys_score')['is_link_to_buy_page']) {
            $code = 40022;
        }
        
        throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($message, null, $code) ;
    }

    public function UserGroupForbidden($group, $actionText)
    {
        throw new \Modules\Core\Exceptions\UserGroupForbiddenException($group, $actionText) ;

        // throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($message, null, $code) ;
    }

    public function BalanceNotEnought($message='余额不足~', $code=40031)
    {
        throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($message, null, $code) ;
    }

    public function RequirePhone($message='此操作需要先绑定手机号~', $code=40012)
    {
        throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($message, null, $code) ;
    }

    public function BadRequest($message='参数不完整，请检查是否填写齐全', $errors=null, $code=10021)
    {
        throw new \Symfony\Component\HttpKernel\Exception\BadRequestHttpException($message, null, $code);
    }

    public function Unauthorized($message='需要登录认证', $errors=null, $code = 10001)
    {
        throw new \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException('', $message, null, $code);
    }

    public function AccessDenied($message='无操作权限', $errors=[])
    {
        $code = 10002 ;
    	throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException($message, null, $code) ;
    }
}
