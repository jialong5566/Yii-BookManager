<?php

?>
<table class='table table-bordered'>

    <tr>
        <th>序号</th>
        <th>书名</th>
        <th>作者</th>
        <th>价格</th>
        <th>网址</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    <?php foreach ($models as $model):?>
    <tr>
        <td><?=$model->bookid?></td>
        <td><?=$model->title?></td>
        <td><?=$model->writer?></td>
        <td><?=$model->price?></td>
        <td><?=$model->webaddr?></td>
        <td><?=\yii\bootstrap\Html::a('修改',['edit','id'=>$model->bookid],['class'=>'btn btn-warning'])?></td>
        <td><?=\yii\bootstrap\Html::a('删除',['delete','id'=>$model->bookid],['class'=>'btn btn-danger'])?></td>
    </tr>

    <?php endforeach;?>



</table>

