<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Luong */

$this->title = 'Update Luong: ' . $model->idLuong;
$this->params['breadcrumbs'][] = ['label' => 'Luongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLuong, 'url' => ['view', 'id' => $model->idLuong]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="luong-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
