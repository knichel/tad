<?php

namespace app\controllers;

use app\models\Districts;
use app\models\DistrictsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DistrictsController implements the CRUD actions for Districts model.
 */
class DistrictsController extends Controller
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
     * Lists all Districts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DistrictsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Districts model.
     * @param int $distric_id Distric ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($distric_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($distric_id),
        ]);
    }

    /**
     * Creates a new Districts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Districts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'distric_id' => $model->distric_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Districts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $distric_id Distric ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($distric_id)
    {
        $model = $this->findModel($distric_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'distric_id' => $model->distric_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Districts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $distric_id Distric ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($distric_id)
    {
        $this->findModel($distric_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Districts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $distric_id Distric ID
     * @return Districts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($distric_id)
    {
        if (($model = Districts::findOne(['distric_id' => $distric_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
