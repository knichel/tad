<?php

namespace app\controllers;

use app\models\Users2programs;
use app\models\Users2programsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Users2programsController implements the CRUD actions for Users2programs model.
 */
class Users2programsController extends Controller
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
     * Lists all Users2programs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Users2programsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users2programs model.
     * @param int $user2program_id User 2program ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user2program_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user2program_id),
        ]);
    }

    /**
     * Creates a new Users2programs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Users2programs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'user2program_id' => $model->user2program_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users2programs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $user2program_id User 2program ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user2program_id)
    {
        $model = $this->findModel($user2program_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user2program_id' => $model->user2program_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Users2programs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $user2program_id User 2program ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user2program_id)
    {
        $this->findModel($user2program_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users2programs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $user2program_id User 2program ID
     * @return Users2programs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user2program_id)
    {
        if (($model = Users2programs::findOne(['user2program_id' => $user2program_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
