<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5 0005
 * Time: 10:25
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}