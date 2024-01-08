<?php

namespace frontend\controllers;

use common\models\Favoritos;
use common\models\Produtos;
use common\models\Userdata;
use frontend\models\ProdutosSearch;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutosController implements the CRUD actions for Produtos model.
 */
class ProdutosController extends Controller
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
                    'only' => ['index', 'view', 'addfavoritos', 'removerfavoritos'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index', 'view', 'addfavoritos', 'removerfavoritos'],
                            'roles' => ['cliente'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Produtos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProdutosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produtos model.
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

    public function actionAddfavoritos($id)
    {
        $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);

        $favoritos = new Favoritos();
        $favoritos->id_userdata = $userData->id;
        $favoritos->id_produto = $id;
        $favoritos->save();

        return $this->goBack();
    }

    public function actionRemoverfavoritos($id)
    {
        $favoritos = Favoritos::findOne(['id_produto' => $id]);
        if ($favoritos) {
            $favoritos->delete();
        }

        return $this->goBack();
    }

    /**
     * Finds the Produtos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Produtos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produtos::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
