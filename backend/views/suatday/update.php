<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Suatday */

$this->title = 'Update Suatday: ' . $model->idSuatDay;
$this->params['breadcrumbs'][] = ['label' => 'Suatdays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSuatDay, 'url' => ['view', 'id' => $model->idSuatDay]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suatday-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
