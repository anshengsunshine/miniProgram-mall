<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/16 0016
 * Time: 13:14
 */

namespace app\lib\exception;


class SuccessMessage extends BaseException
{
    public $code = 201;
    public $msg = 'ok';
    public $errorCode = 0;
}