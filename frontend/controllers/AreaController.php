<?php

namespace frontend\controllers;

use Yii;
use common\models\AreaModel;
use common\models\StateModel;
use frontend\models\AreaSearchModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AreaController implements the CRUD actions for AreaModel model.
 */
class AreaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AreaModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AreaSearchModel();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	$model_state = StateModel::find()->orderBy('nameRu ASC')->all();
	
	foreach($model_state as $value){
		$arrState[$value->idState] = $value->nameRu;
	}
	
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
	    'arrState' => $arrState
        ]);
    }

    /**
     * Displays a single AreaModel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AreaModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AreaModel();

	$model_state = StateModel::find()->orderBy('nameRu ASC')->all();
	
	foreach($model_state as $value){
		$arrState[$value->idState] = $value->nameRu;
	}	
	
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idArea]);
        } else {
            return $this->render('create', [
                'model' => $model,
		'arrState' => $arrState
            ]);
        }
    }

    /**
     * Updates an existing AreaModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	$model_state = StateModel::find()->orderBy('nameRu ASC')->all();
	
	foreach($model_state as $value){
		$arrState[$value->idState] = $value->nameRu;
	}
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idArea]);
        } else {
            return $this->render('update', [
                'model' => $model,
		'arrState' => $arrState
            ]);
        }
    }

    /**
     * Deletes an existing AreaModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AreaModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AreaModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AreaModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
