<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Suatday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suatday-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'idGiaSu')->dropDownList(\common\models\Giasu::listGiasu()) ?>

   
    <?= $form->field($model, 'idNguoiCan')->dropDownList(\common\models\Nguoican::listNguoiCan()) ?>
    
    <?= $form->field($model, 'idLuong')->dropDownList(\common\models\Luong::listLuong()) ?>
    <?= $form->field($model, 'tinhtrang')->textInput() ?>
 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
