<?php
namespace frontend\controllers;
use frontend\models\AddForm;
use frontend\models\Books;
use frontend\models\Sch;
use yii\bootstrap\Html;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Request;
use yii\web\Session;

class UpdateController extends Controller{
    public function actionList(){
//        $query = Books::find();
//        $total = $query->count();
//        $pager = new Pagination();
//        $pager->totalCount = $total;
//        $pager->pageSize = 10;
//        $models = $query->limit($pager->limit)->offset($pager->offset)->all();
        $models = Books::find()->all();
        $session = \Yii::$app->getSession();
        $session->setFlash('danger','请慎重删除');

        return $this->render('list',['models'=>$models]);
    }
    public function actionAdd(){
        $model = new Books();
        $request = new Request();
        if($request->isPost){
            $model->load($request->post());
            if($model->validate()){
                $model->save();
                $session = \Yii::$app->session;
                $session->setFlash('info','添加成功');
                $this->redirect(['update/list']);
            }
        }
        return $this->render('add',['model'=>$model]);
    }
    public function actionEdit($id){
        $model = Books::findOne(['bookid'=>$id]);
        $request = new Request();
        if($request->isPost){
            $model->load($request->post());
            if($model->validate()){
                $model->save();
                $session = Session::$app->session;
                $session->setFlash('success','修改成功');
                $this->redirect(['update/list']);
            }
        }

        return $this->render('add',['model'=>$model]);
    }
    public function actionDelete($id){
        $model = Books::findOne(['bookid'=>$id]);
        $model->delete();

        $this->redirect(['update/list']);
    }
    public function actionSch(){
        $model= new Sch();
        $request = new Request();
        if($request->isPost){
            $model->load($request->post());
            if($model->validate()){
                $keyword = $model->keyword;
                $data = Books::find()->where(['like','writer',$keyword])->orWhere(['like','title',$keyword])->all();
                $session = \Yii::$app->session;
                $session->setFlash('success','找到以下结果');
                return $this->render('list',['models'=>$data]);
            }
        }
        return $this->render('sch',['model'=>$model]);
    }
}