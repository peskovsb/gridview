<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\StateModel */

$this->title = 'Create State Model';
$this->params['breadcrumbs'][] = ['label' => 'State Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
