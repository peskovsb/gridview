<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AreaSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Area Models';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="area-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Area Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idArea',
            //'idCountry',
            //'idState',
	    [
		'attribute' => 'idState',
		'value' => 'idStateFilter.nameRu',
		'filter' => $arrState
	    ],
            'nameRu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
