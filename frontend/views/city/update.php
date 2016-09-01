<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CityModel */

$this->title = 'Update City Model: ' . $model->idCity;
$this->params['breadcrumbs'][] = ['label' => 'City Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCity, 'url' => ['view', 'id' => $model->idCity]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="city-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
