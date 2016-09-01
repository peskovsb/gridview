<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CitySearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCity') ?>

    <?= $form->field($model, 'idCountry') ?>

    <?= $form->field($model, 'idState') ?>

    <?= $form->field($model, 'idArea') ?>

    <?= $form->field($model, 'nameRu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
