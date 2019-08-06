<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 17:03
 */

namespace app\api\behavior;


class CORS
{
    public function appInit(&$params)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: POST,GET');
        if(request()->isOptions()){
            exit();
        }
    }
}