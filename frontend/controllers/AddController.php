<?php
namespace frontend\controllers;

use frontend\models\AddForm;
use frontend\models\Books;
use yii\web\Controller;
use yii\web\Request;

class AddController extends Controller {
    public function actionAdd(){
        $model = new AddForm();

        $request = new Request();
        if($request->isPost){
            $model = new Books();
            $model->load($request->post());
            if($model->validate()){
                $model->save();
            }
        }

        return $this->render('add',['model'=>$model]);
    }
}