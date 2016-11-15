<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NguoicanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nguoican-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idNguoiCan') ?>

    <?= $form->field($model, 'hoten') ?>

    <?= $form->field($model, 'gioitinh') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'sodienthoai') ?>

    <?php // echo $form->field($model, 'yc_lop') ?>

    <?php // echo $form->field($model, 'yc_mon') ?>

    <?php // echo $form->field($model, 'yc_truong') ?>

    <?php // echo $form->field($model, 'yc_kinhnghiem') ?>

    <?php // echo $form->field($model, 'yc_que') ?>

    <?php // echo $form->field($model, 'yc_sinhviennam') ?>

    <?php // echo $form->field($model, 'yc_gioitinh') ?>

    <?php // echo $form->field($model, 'yc_khac') ?>

    <?php // echo $form->field($model, 'buoihoc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
