<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GiasuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giasu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idGiaSu') ?>

    <?= $form->field($model, 'hoten') ?>

    <?= $form->field($model, 'gioitinh') ?>

    <?= $form->field($model, 'sodienthoai') ?>

    <?= $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'mssv') ?>

    <?php // echo $form->field($model, 'ngaysinh') ?>

    <?php // echo $form->field($model, 'truong') ?>

    <?php // echo $form->field($model, 'sinhviennam') ?>

    <?php // echo $form->field($model, 'que') ?>

    <?php // echo $form->field($model, 'kinhnghiem') ?>

    <?php // echo $form->field($model, 'lopday') ?>

    <?php // echo $form->field($model, 'thoigianranh') ?>

    <?php // echo $form->field($model, 'thongtinthem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
