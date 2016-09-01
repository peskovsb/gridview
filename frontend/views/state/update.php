<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StateModel */

$this->title = 'Update State Model: ' . $model->idState;
$this->params['breadcrumbs'][] = ['label' => 'State Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idState, 'url' => ['view', 'id' => $model->idState]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="state-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
