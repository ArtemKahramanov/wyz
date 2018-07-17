<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\WorkerDiscipline;
use app\models\WorkerDisciplineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkerDisciplineController implements the CRUD actions for WorkerDiscipline model.
 */
class WorkerDisciplineController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all WorkerDiscipline models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WorkerDisciplineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WorkerDiscipline model.
     * @param integer $worker_id
     * @param integer $discipline_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($worker_id, $discipline_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($worker_id, $discipline_id),
        ]);
    }

    /**
     * Creates a new WorkerDiscipline model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WorkerDiscipline();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'worker_id' => $model->worker_id, 'discipline_id' => $model->discipline_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WorkerDiscipline model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $worker_id
     * @param integer $discipline_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($worker_id, $discipline_id)
    {
        $model = $this->findModel($worker_id, $discipline_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'worker_id' => $model->worker_id, 'discipline_id' => $model->discipline_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WorkerDiscipline model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $worker_id
     * @param integer $discipline_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($worker_id, $discipline_id)
    {
        $this->findModel($worker_id, $discipline_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WorkerDiscipline model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $worker_id
     * @param integer $discipline_id
     * @return WorkerDiscipline the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($worker_id, $discipline_id)
    {
        if (($model = WorkerDiscipline::findOne(['worker_id' => $worker_id, 'discipline_id' => $discipline_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
