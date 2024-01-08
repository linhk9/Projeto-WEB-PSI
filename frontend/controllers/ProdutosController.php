<?php

namespace frontend\controllers;

use common\models\Avaliacoes;
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
                    'only' => ['index', 'view', 'addfavoritos', 'removerfavoritos', 'enviaravaliacao'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index', 'view', 'addfavoritos', 'removerfavoritos', 'enviaravaliacao'],
                            'roles' => ['cliente'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'enviaravaliacao' => ['post'],
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
        if (Yii::$app->user->can('listaProdutos_FO')) {
            $searchModel = new ProdutosSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->redirect(['site/index']);
    }

    /**
     * Displays a single Produtos model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->can('verProdutos_FO')) {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'avaliacaoModel' => new Avaliacoes(),
            ]);
        }

        return $this->redirect(['site/index']);
    }

    public function actionAddfavoritos($id)
    {
        if (Yii::$app->user->can('adicionarFavorito_FO')) {
            $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);

            $favoritos = new Favoritos();
            $favoritos->id_userdata = $userData->id;
            $favoritos->id_produto = $id;
            $favoritos->save();

            return $this->goBack();
        }

        return $this->redirect(['site/index']);
    }

    public function actionRemoverfavoritos($id)
    {
        if (Yii::$app->user->can('removerFavorito_FO')) {
            $favoritos = Favoritos::findOne(['id_produto' => $id]);
            if ($favoritos) {
                $favoritos->delete();
            }

            return $this->goBack();
        }

        return $this->redirect(['site/index']);
    }

    public function actionEnviaravaliacao($idProduto)
    {
        if (Yii::$app->user->can('enviarAvaliacao_FO')) {
            $model = new Avaliacoes();
            $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);

            if ($model->load(Yii::$app->request->post())) {
                $model->id_userdata = $userData->id;
                $model->id_produto = $idProduto;
                if ($model->save()) {
                    return $this->redirect(['produtos/view', 'id' => $model->id_produto]);
                }
            }

            return $this->redirect(['produtos/index']);
        }

        return $this->redirect(['site/index']);
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
