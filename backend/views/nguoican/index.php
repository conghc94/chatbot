<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NguoicanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nguoicans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nguoican-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nguoican', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idNguoiCan',
            'hoten',
            'gioitinh',
            'diachi',
            'sodienthoai',
            // 'yc_lop',
            // 'yc_mon',
            // 'yc_truong',
            // 'yc_kinhnghiem',
            // 'yc_que',
            // 'yc_sinhviennam',
            // 'yc_gioitinh',
            // 'yc_khac',
            // 'buoihoc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
