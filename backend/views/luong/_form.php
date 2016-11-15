<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Luong */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="luong-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idLuong')->textInput() ?>

    <?= $form->field($model, 'lop')->textInput() ?>

    <?= $form->field($model, 'gia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
