<?php
$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'keyword')->textInput()->label("请输入书的关键字");
echo \yii\bootstrap\Html::submitButton('查找',['class'=>'btn btn-primary']);

\yii\bootstrap\ActiveForm::end();