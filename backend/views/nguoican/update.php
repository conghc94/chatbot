<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nguoican */

$this->title = 'Update Nguoican: ' . $model->idNguoiCan;
$this->params['breadcrumbs'][] = ['label' => 'Nguoicans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNguoiCan, 'url' => ['view', 'id' => $model->idNguoiCan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nguoican-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
