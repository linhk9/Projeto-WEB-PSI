<?php
    namespace app\commands;

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
            $cliente = $auth->createRole('funcionario');
            $auth->add($cliente);
            // $auth->addChild($cliente, $createPost);

            // adiciona a role "funcionario" e dá as seguintes permissões
            $funcionario = $auth->createRole('funcionario');
            $auth->add($funcionario);
            // $auth->addChild($funcionario, $createPost);

            // adiciona a role "admin" e dá as seguintes permissões
            // tambem obtem as permissões da role "funcionario"
            $admin = $auth->createRole('admin');
            $auth->add($admin);
            // $auth->addChild($admin, $createPost);
            $auth->addChild($admin, $funcionario);

            // Dar roles a users. 1 e 2 são IDs returnados por IdentityInterface::getId()
            // Normalmente é implementado no User model.
            // $auth->assign($cliente, 3);
            // $auth->assign($funcionario, 2);
            // $auth->assign($admin, 1);

            // Para executar o ficheiro de migração de RBAC execute o seguinte comando:
            // yii rbac/init
        }
    }