<?php

namespace frontend\controllers;

use common\models\Carrinho;
use common\models\CarrinhoLinhas;
use common\models\FaturaLinhas;
use common\models\Faturas;
use common\models\Userdata;
use frontend\models\CarrinhoSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarrinhoController implements the CRUD actions for Carrinho model.
 */
class CarrinhoController extends Controller
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
                    'only' => ['index', 'adicionar', 'atualizarqtd', 'delete', 'checkout'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['index', 'adicionar', 'atualizarqtd', 'delete', 'checkout'],
                            'roles' => ['cliente'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'atualizarqtd' => ['post'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Carrinho models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CarrinhoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAdicionar($id, $precoProduto)
    {
        $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);
        $carrinho = Carrinho::find()->where(['id_userdata' => $userData->id])->one();

        if ($carrinho === null) {
            $carrinho = new Carrinho();
            $carrinho->id_userdata = $userData->id;
            $carrinho->data = date('Y-m-d');
            $carrinho->save();
        }

        $carrinhoLinha = CarrinhoLinhas::find()->where(['id_carrinho' => $carrinho->id, 'id_produto' => $id])->one();

        if ($carrinhoLinha === null) {
            $carrinhoLinha = new CarrinhoLinhas();
            $carrinhoLinha->id_carrinho = $carrinho->id;
            $carrinhoLinha->id_produto = $id;
            $carrinhoLinha->quantidade = 1;
            $carrinhoLinha->preco = $precoProduto;
        } else {
            $carrinhoLinha->quantidade += 1;
        }

        $carrinhoLinha->save();

        return $this->redirect(['carrinho/index']);
    }

    public function actionAtualizarqtd($id)
    {
        $carrinhoLinha = CarrinhoLinhas::findOne($id);
        if ($carrinhoLinha === null) {
            throw new NotFoundHttpException('Esta linha não existe');
        }

        $quantidade = \Yii::$app->request->post('CarrinhoLinhas')['quantidade'];
        if ($quantidade !== null && $quantidade > 0 && $quantidade <= $carrinhoLinha->produto->stock) {
            $carrinhoLinha->quantidade = $quantidade;
            $carrinhoLinha->save();
        }

        return $this->redirect(['carrinho/index']);
    }

    public function actionDelete($id)
    {
        $carrinhoLinha = CarrinhoLinhas::findOne($id);
        if ($carrinhoLinha === null) {
            throw new NotFoundHttpException('Esta linha não existe.');
        }

        $carrinhoId = $carrinhoLinha->id_carrinho;
        $carrinhoLinha->delete();

        $itemsRestantes= CarrinhoLinhas::find()->where(['id_carrinho' => $carrinhoId])->one();
        if ($itemsRestantes === null) {
            // If there are no other items, delete the cart
            $carrinho = Carrinho::findOne($carrinhoId);
            if ($carrinho !== null) {
                $carrinho->delete();
            }
        }

        return $this->redirect(['carrinho/index']);
    }

    public function actionCheckout()
    {
        $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);

        $fatura = new Faturas();
        $fatura->id_userdata = $userData->id;
        $fatura->data = date('Y-m-d');
        $fatura->save();

        $carrinho = Carrinho::find()->where(['id_userdata' => $userData->id])->one();
        if ($carrinho !== null) {
            $carrinhoLinhas = $carrinho->getCarrinhoLinhas()->all();
            foreach ($carrinhoLinhas as $linha) {
                $produto = $linha->produto;
                if ($linha->quantidade > $produto->stock) {
                    throw new \yii\web\HttpException(400, 'Não existe stock suficiente de ' . $produto->nome);
                }
                $produto->stock -= $linha->quantidade;
                $produto->save();

                $faturaLinha = new FaturaLinhas();
                $faturaLinha->id_fatura = $fatura->id;
                $faturaLinha->id_produto = $linha->id_produto;
                $faturaLinha->quantidade = $linha->quantidade;
                $faturaLinha->preco = $linha->preco;
                $faturaLinha->save();
                $linha->delete();
            }
            $carrinho->delete();
        }

        return $this->redirect(['fatura/view', 'id' => $fatura->id]);
    }

    /**
     * Finds the Carrinho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Carrinho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carrinho::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
