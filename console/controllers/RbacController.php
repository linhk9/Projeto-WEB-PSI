<?php
    namespace console\controllers;

    use Yii;
    use yii\console\Controller;

    class RbacController extends Controller
    {
        public function actionInit(): void
        {
            $auth = Yii::$app->authManager;
            $auth->removeAll();

            // add "createPost" permission
            // $createPost = $auth->createPermission('createPost');
            // $createPost->description = 'Create a post';
            // $auth->add($createPost);







            

            // adiciona a role "cliente" e dá as seguintes permissões
            $cliente = $auth->createRole('cliente');
            $auth->add($cliente);
            // $auth->addChild($cliente, $createPost);

            // adiciona a role "funcionario" e dá as seguintes permissões
            $funcionario = $auth->createRole('funcionario');
            $auth->add($funcionario);
            // $auth->addChild($funcionario, $createPost);
             $auth->addChild($admin, $cliente);

            // adiciona a role "admin" e dá as seguintes permissões
            // tambem obtem as permissões da role "funcionario"
            $admin = $auth->createRole('admin');
            $auth->add($admin);
            // $auth->addChild($admin, $createPost);
            $auth->addChild($admin, $funcionario);

            // Para executar o ficheiro de migração de RBAC execute o seguinte comando:
            // yii rbac/init
        }
    }
