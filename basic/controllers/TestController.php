<?php

namespace app\controllers;

use Yii;
use yii\base\BaseObject;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Product;

class A extends BaseObject {

}

class TestController extends Controller
{

    public function actionIndex()

    {
        /*$obj=new A();
        $obj->prop=1;
        return VarDumper::dumpAsString($obj);*/

        /* $model->id=11;
         $model->name='First';
         $model->price=123;*/
        return \Yii::$app->test->run();
        $model=new Product(['id'=>11, 'name'=>'Alexandr', 'price'=>123]);
        return $this->render('index', [
            'model' => $model
            ]);
    }
}
