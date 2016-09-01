<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CityModel */

$this->title = 'Create City Model';
$this->params['breadcrumbs'][] = ['label' => 'City Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
