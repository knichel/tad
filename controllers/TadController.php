<?php

namespace app\controllers;

use app\models\Tad;
use app\models\TadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TadController implements the CRUD actions for Tad model.
 */
class TadController extends Controller
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
     * Lists all Tad models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tad model.
     * @param int $tad_id Tad ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tad_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tad_id),
        ]);
    }

    /**
     * Creates a new Tad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tad();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tad_id' => $model->tad_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tad_id Tad ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tad_id)
    {
        $model = $this->findModel($tad_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tad_id' => $model->tad_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tad_id Tad ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tad_id)
    {
        $this->findModel($tad_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tad_id Tad ID
     * @return Tad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tad_id)
    {
        if (($model = Tad::findOne(['tad_id' => $tad_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
