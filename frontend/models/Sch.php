<?php
namespace frontend\models;
use yii\base\Model;

class Sch extends Model{
    public $keyword;
    public function rules()
    {
        return [
            ['keyword','required']
        ]; // TODO: Change the autogenerated stub
    }

}