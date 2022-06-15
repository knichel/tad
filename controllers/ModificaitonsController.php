<?php

namespace app\controllers;

use app\models\Modifications;
use app\models\ModificationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ModificaitonsController implements the CRUD actions for Modifications model.
 */
class ModificaitonsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Modifications models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ModificationsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Modifications model.
     * @param int $modification_id Modification ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($modification_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($modification_id),
        ]);
    }

    /**
     * Creates a new Modifications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Modifications();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'modification_id' => $model->modification_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Modifications model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $modification_id Modification ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($modification_id)
    {
        $model = $this->findModel($modification_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'modification_id' => $model->modification_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Modifications model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $modification_id Modification ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($modification_id)
    {
        $this->findModel($modification_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Modifications model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $modification_id Modification ID
     * @return Modifications the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($modification_id)
    {
        if (($model = Modifications::findOne(['modification_id' => $modification_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
