<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Nguoican */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nguoican-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hoten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gioitinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sodienthoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_lop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_mon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_truong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_kinhnghiem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_que')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_sinhviennam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_gioitinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yc_khac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buoihoc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
