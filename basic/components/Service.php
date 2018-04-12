<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: amper
 * Date: 11.04.18
 * Time: 18:23
 */

class Service extends \yii\base\Component
{
    public $prop='default';
    public function run(){
        return $this->prop;
    }
}


