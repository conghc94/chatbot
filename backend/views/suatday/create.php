<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Suatday */

$this->title = 'Create Suatday';
$this->params['breadcrumbs'][] = ['label' => 'Suatdays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suatday-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
