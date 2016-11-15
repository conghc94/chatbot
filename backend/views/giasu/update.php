<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giasu */

$this->title = 'Update Giasu: ' . $model->idGiaSu;
$this->params['breadcrumbs'][] = ['label' => 'Giasus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGiaSu, 'url' => ['view', 'id' => $model->idGiaSu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giasu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
