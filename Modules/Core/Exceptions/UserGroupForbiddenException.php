<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Modules\Core\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

// use Exception;


/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class UserGroupForbiddenException extends HttpException
{
	public $group = NULL;
    public $actionText = '';

    public $message = '不符合用户分组条件';

    public $code = 50011;
    public $statusCode = 409;
    /**
     * @param string|null     $message  The internal exception message
     * @param \Throwable|null $previous The previous exception
     * @param int             $code     The internal exception code
     */
    public function __construct($group, $actionText = '参与')
    {
    	$this->group = $group;
        $this->actionText = $actionText;

    	$headers = [];
    	$previous = NULL;

        parent::__construct($this->statusCode, $this->message, $previous, $headers, $this->code);
    }

    public function render()
    {
         return response()->json([
            'info' => [
                'id' => $this->group->id,
                'uuid' => $this->group->uuid,
                'title' => $this->group->title,
                'action_text' => $this->actionText
            ],
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
        ])->setStatusCode($this->statusCode);
    }

}
