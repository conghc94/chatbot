<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Giasu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giasu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hoten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gioitinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sodienthoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mssv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaysinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'truong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinhviennam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'que')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kinhnghiem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lopday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thoigianranh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thongtinthem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
