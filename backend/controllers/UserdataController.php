<?php

namespace backend\controllers;

use Yii;
use backend\models\CreateUserForm;
use common\models\User;
use common\models\Userdata;
use backend\models\UserdataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UserdataController implements the CRUD actions for Userdata model.
 */
class UserdataController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'actions' => ['index', 'create', 'view', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['funcionario', 'admin'],
                        ],
                    ],
                ],
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
     * Lists all Userdata models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserdataSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Userdata model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Userdata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (Yii::$app->user->can('criarUtilizadores')) {
            $modelCreateUser = new CreateUserForm();

            if ($this->request->isPost) {
                if ($modelCreateUser->load($this->request->post()) && $modelCreateUser->create()) {
                    return $this->redirect(['index']);
                }
            }

            return $this->render('create', [
                'model' => $modelCreateUser
            ]);
        }

        return $this->redirect(['index']);
    }

    /**
     * Updates an existing Userdata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->can('atualizarUtilizadores')) {
            $model = $this->findModel($id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                if (Yii::$app->user->can('mudarRoleUtilizador')) {
                    $auth = \Yii::$app->authManager;
                    $role = $auth->getRole($model->role);
                    $auth->revokeAll($model->id_user);
                    $auth->assign($role, $model->id_user);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }

        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing Userdata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->can('apagarUtilizadores')) {
            $userData = $this->findModel($id);
            $model = User::findOne($userData->id_user);

            if ($model && ($model->id !== Yii::$app->user->identity->id)) {
                if ($model->status != User::STATUS_DELETED) {
                    $model->status = User::STATUS_DELETED;
                } else {
                    $model->status = User::STATUS_ACTIVE;
                }
                $model->save();
            }

            return $this->redirect(['index']);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Userdata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Userdata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Userdata::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
