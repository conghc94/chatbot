<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Luong */

$this->title = 'Create Luong';
$this->params['breadcrumbs'][] = ['label' => 'Luongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="luong-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
