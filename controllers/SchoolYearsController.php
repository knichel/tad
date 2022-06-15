<?php

namespace app\controllers;

use app\models\SchoolYears;
use app\models\SchoolYearsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SchoolYearsController implements the CRUD actions for SchoolYears model.
 */
class SchoolYearsController extends Controller
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
     * Lists all SchoolYears models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SchoolYearsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SchoolYears model.
     * @param int $schoolYear_id School Year ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($schoolYear_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($schoolYear_id),
        ]);
    }

    /**
     * Creates a new SchoolYears model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SchoolYears();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'schoolYear_id' => $model->schoolYear_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SchoolYears model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $schoolYear_id School Year ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($schoolYear_id)
    {
        $model = $this->findModel($schoolYear_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'schoolYear_id' => $model->schoolYear_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SchoolYears model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $schoolYear_id School Year ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($schoolYear_id)
    {
        $this->findModel($schoolYear_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SchoolYears model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $schoolYear_id School Year ID
     * @return SchoolYears the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($schoolYear_id)
    {
        if (($model = SchoolYears::findOne(['schoolYear_id' => $schoolYear_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
