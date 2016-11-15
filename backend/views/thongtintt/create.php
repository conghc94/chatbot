<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Thongtintt */

$this->title = 'Create Thongtintt';
$this->params['breadcrumbs'][] = ['label' => 'Thongtintts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thongtintt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
