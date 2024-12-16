<?php

namespace frontend\controllers;

use common\models\Favoritos;
use common\models\User;
use common\models\Userdata;
use frontend\models\PerfilForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'perfil'],
                        'allow' => true,
                        'roles' => ['cliente'],
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
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $favoritos = [];
        if (!Yii::$app->user->isGuest) {
            $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);
        }

        return $this->render('index', [
            'favoritos' => $favoritos,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Conta Criada com sucesso!');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionPerfil()
    {
        if (Yii::$app->user->can('atualizarUtilizador_FO')) {
            $model = new PerfilForm();
            $user = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
            $userData = Userdata::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
            if ($model->load(Yii::$app->request->post()) && $model->guardar()) {
                Yii::$app->session->setFlash('success', 'Dados alterados com sucesso!');
                return $this->goHome();
            }

            return $this->render('perfil', [
                'model' => $model,
                'user' => $user,
                'userData' => $userData,
            ]);
        }

        return $this->goHome();
    }
}