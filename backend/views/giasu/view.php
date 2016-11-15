<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giasu */

$this->title = $model->idGiaSu;
$this->params['breadcrumbs'][] = ['label' => 'Giasus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giasu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGiaSu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGiaSu], [
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
            'idGiaSu',
            'hoten',
            'gioitinh',
            'sodienthoai',
            'diachi',
            'mssv',
            'ngaysinh',
            'truong',
            'sinhviennam',
            'que',
            'kinhnghiem',
            'lopday',
            'thoigianranh',
            'thongtinthem',
        ],
    ]) ?>

</div>
