<?php

namespace backend\controllers;

use common\models\Avaliacoes;
use common\models\Categorias;
use common\models\Faturas;
use common\models\LoginForm;
use common\models\Produtos;
use common\models\Promocoes;
use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['funcionario', 'admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $utilizadores = User::find()->count();
        $faturas = Faturas::find()->count();
        $produtos = Produtos::find()->count();
        $categorias = Categorias::find()->count();
        $promocoes = Promocoes::find()->count();
        $avaliacoes = Avaliacoes::find()->count();

        return $this->render('index', [
            'utilizadores' => $utilizadores,
            'faturas' => $faturas,
            'produtos' => $produtos,
            'categorias' => $categorias,
            'promocoes' => $promocoes,
            'avaliacoes' => $avaliacoes,
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if (Yii::$app->user->can('funcionario') || Yii::$app->user->can('admin')) {
                return $this->goBack();
            }

            Yii::$app->user->logout();
            return $this->goHome();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
