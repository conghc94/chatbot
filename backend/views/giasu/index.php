<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GiasuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giasus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giasu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a('Create Giasu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
       <?= 
        ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' =>[
                ['class' => 'yii\grid\SerialColumn'],
                'idGiaSu',
                'hoten',
                'gioitinh',
                'sodienthoai',
                 'mssv',
                'ngaysinh',
                'truong',
                 'sinhviennam',
                 'que',
                 'kinhnghiem',
                 'lopday',
                 'thoigianranh',
                'thongtinthem',
                'diachi',
            ],
            'disabledColumns'=>[1, 2],
            
        ]);
    ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idGiaSu',
            'hoten',
            'gioitinh',
            'sodienthoai',
            'diachi',
            // 'mssv',
            // 'ngaysinh',
            // 'truong',
            // 'sinhviennam',
            // 'que',
            // 'kinhnghiem',
            // 'lopday',
            // 'thoigianranh',
            // 'thongtinthem',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
