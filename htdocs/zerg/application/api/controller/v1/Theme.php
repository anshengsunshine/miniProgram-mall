<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/3/003
 * Time: 19:16
 */

namespace app\api\controller\v1;


use app\api\model\BaseModel;
use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeMode;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ThemeException;
use think\Model;

class Theme extends BaseModel
{
    /*
     * @url  /theme?id=id1,id2,id3……
     * @return  一组theme模型
    */
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $result = ThemeMode::with('topicImg,headImg')
            ->select($ids);
        if($result->isEmpty()){
            throw new ThemeException();
        }
        return $result;
    }

    /*
     * @url /theme/:id
    */
    public function getComplexOne($id){
        (new IDMustBePostiveInt())->goCheck();
        $theme = ThemeMode::getThemeWithProducts($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme;
    }
}