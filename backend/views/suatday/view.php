<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Suatday */

$this->title = $model->idSuatDay;
$this->params['breadcrumbs'][] = ['label' => 'Suatdays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suatday-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idSuatDay], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idSuatDay], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idSuatDay',
            'idGiaSu',
            'idNguoiCan',
            'idLuong',
            'tinhtrang',
        ],
    ]) ?>

</div>
