<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/2/002
 * Time: 10:50
 */

namespace app\api\model;


use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['id','from','update_time','delete_time'];

    public function getUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }
}