<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/3/003
 * Time: 18:08
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value,$data)
    {
        $finalUrl = $value;
        if ($data['from'] == 1) {
            $finalUrl = config('setting.img_prefix') . $value;
        }
        return $finalUrl;
    }

}