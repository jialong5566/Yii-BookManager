<?php
$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'title')->textInput()->label("书叫什么名字");
echo $form->field($model,'writer')->textInput()->label("书是谁写的");
echo $form->field($model,'price')->textInput()->label("书卖多少钱");
echo $form->field($model,'webaddr')->textInput()->label("网上哪儿能看");
echo \yii\bootstrap\Html::submitButton('提交',['class'=>'btn btn-info']);

\yii\bootstrap\ActiveForm::end();