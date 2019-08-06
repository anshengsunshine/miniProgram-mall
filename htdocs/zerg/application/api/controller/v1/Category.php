<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/9/009
 * Time: 8:06
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){
        $categories = CategoryModel::all([],'img');
        if($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }

}