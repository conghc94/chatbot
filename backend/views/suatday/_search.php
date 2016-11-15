<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SuatdaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suatday-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSuatDay') ?>

    <?= $form->field($model, 'idGiaSu') ?>

    <?= $form->field($model, 'idNguoiCan') ?>

    <?= $form->field($model, 'idLuong') ?>

    <?= $form->field($model, 'tinhtrang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
