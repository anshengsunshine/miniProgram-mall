<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/9/009
 * Time: 16:02
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}