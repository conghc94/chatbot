<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Nguoican */

$this->title = $model->idNguoiCan;
$this->params['breadcrumbs'][] = ['label' => 'Nguoicans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nguoican-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idNguoiCan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idNguoiCan], [
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
            'idNguoiCan',
            'hoten',
            'gioitinh',
            'diachi',
            'sodienthoai',
            'yc_lop',
            'yc_mon',
            'yc_truong',
            'yc_kinhnghiem',
            'yc_que',
            'yc_sinhviennam',
            'yc_gioitinh',
            'yc_khac',
            'buoihoc',
        ],
    ]) ?>

</div>
