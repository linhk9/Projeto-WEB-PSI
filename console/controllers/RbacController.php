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
            
            // adiciona a permissão "gerirUtilizadores"
            $gerirUtilizadores = $auth->createPermission('gerirUtilizadores');
            $gerirUtilizadores->description = 'Gerir Utilizadores';
            $auth->add($gerirUtilizadores);

            // adiciona a permissão "verUtilizadores"
            $verUtilizadores = $auth->createPermission('verUtilizadores');
            $verUtilizadores->description = 'Ver Utilizadores';
            $auth->add($verUtilizadores);

            // adiciona a permissão "criarUtilizadores"
            $criarUtilizadores = $auth->createPermission('criarUtilizadores');
            $criarUtilizadores->description = 'Criar Utilizadores';
            $auth->add($criarUtilizadores);

            // adiciona a permissão "atualizarUtilizadores"
            $atualizarUtilizadores = $auth->createPermission('atualizarUtilizadores');
            $atualizarUtilizadores->description = 'Atualizar Utilizadores';
            $auth->add($atualizarUtilizadores);
            
            // adiciona a permissão "apagarUtilizadores"
            $apagarUtilizadores = $auth->createPermission('apagarUtilizadores');
            $apagarUtilizadores->description = 'Apagar Utilizadores';
            $auth->add($apagarUtilizadores);
            
            // adiciona a permissão "gerirProdutos"
            $gerirProdutos = $auth->createPermission('gerirProdutos');
            $gerirProdutos->description = 'Gerir Produtos';
            $auth->add($gerirProdutos);

            // adiciona a permissão "criarProdutos"
            $criarProdutos = $auth->createPermission('criarProdutos');
            $criarProdutos->description = 'Criar Produtos';
            $auth->add($criarProdutos);

            // adiciona a permissão "verProdutos"
            $verProdutos = $auth->createPermission('verProdutos');
            $verProdutos->description = 'Ver Produtos';
            $auth->add($verProdutos);

            // adiciona a permissão "atualizarProdutos"
            $atualizarProdutos = $auth->createPermission('atualizarProdutos');
            $atualizarProdutos->description = 'Atualizar Produtos';
            $auth->add($atualizarProdutos);

            // adiciona a permissão "apagarProdutos"
            $apagarProdutos = $auth->createPermission('apagarProdutos');
            $apagarProdutos->description = 'Apagar Produtos';
            $auth->add($apagarProdutos);

            // adiciona a permissão "gerirCategorias"
            $gerirCategorias = $auth->createPermission('gerirCategorias');
            $gerirCategorias->description = 'Gerir Categorias';
            $auth->add($gerirCategorias);

            // adiciona a permissão "criarCategorias"
            $criarCategorias = $auth->createPermission('criarCategorias');
            $criarCategorias->description = 'Criar Categorias';
            $auth->add($criarCategorias);

            // adiciona a permissão "verCategorias"
            $verCategorias = $auth->createPermission('verCategorias');
            $verCategorias->description = 'Ver Categorias';
            $auth->add($verCategorias);

            // adiciona a permissão "atualizarCategorias"
            $atualizarCategorias = $auth->createPermission('atualizarCategorias');
            $atualizarCategorias->description = 'Atualizar Categorias';
            $auth->add($atualizarCategorias);

            // adiciona a permissão "apagarCategorias"
            $apagarCategorias = $auth->createPermission('apagarCategorias');
            $apagarCategorias->description = 'Apagar Categorias';
            $auth->add($apagarCategorias);

            // adiciona a permissão "gerirPromocoes"
            $gerirPromocoes = $auth->createPermission('gerirPromocoes');
            $gerirPromocoes->description = 'Gerir Promocoes';
            $auth->add($gerirPromocoes);
            
            // adiciona a permissão "criarPromocoes"
            $criarPromocoes = $auth->createPermission('criarPromocoes');
            $criarPromocoes->description = 'Criar Promocoes';
            $auth->add($criarPromocoes);

            // adiciona a permissão "verPromocoes"
            $verPromocoes = $auth->createPermission('verPromocoes');
            $verPromocoes->description = 'Ver Promocoes';
            $auth->add($verPromocoes);

            // adiciona a permissão "atualizarPromocoes"
            $atualizarPromocoes = $auth->createPermission('atualizarPromocoes');
            $atualizarPromocoes->description = 'Atualizar Promocoes';
            $auth->add($atualizarPromocoes);

            // adiciona a permissão "apagarPromocoes"
            $apagarPromocoes = $auth->createPermission('apagarPromocoes');
            $apagarPromocoes->description = 'Apagar Promocoes';
            $auth->add($apagarPromocoes);

            // adiciona a permissão "gerirFaturas"
            $gerirFaturas = $auth->createPermission('gerirFaturas');
            $gerirFaturas->description = 'Gerir Faturas';
            $auth->add($gerirFaturas);

            // adiciona a permissão "verFaturas"
            $verFaturas = $auth->createPermission('verFaturas');
            $verFaturas->description = 'Ver Faturas';
            $auth->add($verFaturas);

            // adiciona a permissão "criarFaturas"
            $criarFaturas = $auth->createPermission('criarFaturas');
            $criarFaturas->description = 'Criar Faturas';
            $auth->add($criarFaturas);

            // adiciona a permissão "atualizarFaturas"
            $atualizarFaturas = $auth->createPermission('atualizarFaturas');
            $atualizarFaturas->description = 'Atualizar Faturas';
            $auth->add($atualizarFaturas);

            // adiciona a permissão "apagarFaturas"
            $apagarFaturas = $auth->createPermission('apagarFaturas');
            $apagarFaturas->description = 'Apagar Faturas';
            $auth->add($apagarFaturas);

            // adiciona a permissão "gerirAvaliacoes"
            $gerirAvaliacoes = $auth->createPermission('gerirAvaliacoes');
            $gerirAvaliacoes->description = 'Gerir Avaliacoes';
            $auth->add($gerirAvaliacoes);

            // adiciona a permissão "verAvaliacoes"
            $verAvaliacoes = $auth->createPermission('verAvaliacoes');
            $verAvaliacoes->description = 'Ver Avaliacoes';
            $auth->add($verAvaliacoes);

            // adiciona a permissão "criarAvaliacoes"
            $criarAvaliacoes = $auth->createPermission('criarAvaliacoes');
            $criarAvaliacoes->description = 'Criar Avaliacoes';
            $auth->add($criarAvaliacoes);

            // adiciona a permissão "atualizarAvaliacoes"
            $atualizarAvaliacoes = $auth->createPermission('atualizarAvaliacoes');
            $atualizarAvaliacoes->description = 'Atualizar Avaliacoes';
            $auth->add($atualizarAvaliacoes);

            // adiciona a permissão "apagarAvaliacoes"
            $apagarAvaliacoes = $auth->createPermission('apagarAvaliacoes');
            $apagarAvaliacoes->description = 'Apagar Avaliacoes';
            $auth->add($apagarAvaliacoes);

            // adiciona a permissão "mudarRoleUtilizador"
            $mudarRoleUtilizador = $auth->createPermission('mudarRoleUtilizador');
            $mudarRoleUtilizador->description = 'Mudar Role Utilizador';
            $auth->add($mudarRoleUtilizador);
            
            //Permissoões front-end
            // adiciona a permissão "atualizarUtilizador_FO"
            $atualizarUtilizador_FO = $auth->createPermission('atualizarUtilizador_FO');
            $atualizarUtilizador_FO->description = 'Atualizar Perfil';
            $auth->add($atualizarUtilizador_FO);

            // adiciona a permissão "gerirFaturas_FO"
            $gerirFaturas_FO = $auth->createPermission('gerirFaturas_FO');
            $gerirFaturas_FO->description = 'Gerir Faturas';
            $auth->add($gerirFaturas_FO);

            // adiciona a permissão "verFaturas_FO"
            $verFaturas_FO = $auth->createPermission('verFaturas_FO');
            $verFaturas_FO->description = 'Ver Faturas';
            $auth->add($verFaturas_FO);

            // adiciona a permissão "enviarAvaliacao_FO"
            $enviarAvaliacao_FO = $auth->createPermission('enviarAvaliacao_FO');
            $enviarAvaliacao_FO->description = 'Enviar Avaliação';
            $auth->add($enviarAvaliacao_FO);

            // adiciona a permissão "adicionarFavorito_FO"
            $adicionarFavorito_FO = $auth->createPermission('adicionarFavorito_FO');
            $adicionarFavorito_FO->description = 'Adicionar Favoritos';
            $auth->add($adicionarFavorito_FO);

            // adiciona a permissão "removerFavorito_FO"
            $removerFavorito_FO = $auth->createPermission('removerFavorito_FO');
            $removerFavorito_FO->description = 'Remover Favoritos';
            $auth->add($removerFavorito_FO);

            // adiciona a permissão "gerirCarrinho_FO"
            $gerirCarrinho_FO = $auth->createPermission('gerirCarrinho_FO');
            $gerirCarrinho_FO->description = 'Gerir Carrinho';
            $auth->add($gerirCarrinho_FO);
            
            // adiciona a permissão "adicionarCarrinho_FO"
            $adicionarCarrinho_FO = $auth->createPermission('adicionarCarrinho_FO');
            $adicionarCarrinho_FO->description = 'Adicionar Carrinho';
            $auth->add($adicionarCarrinho_FO);
                
            // adiciona a permissão "atualizarCarrinho_FO"
            $atualizarCarrinho_FO = $auth->createPermission('atualizarCarrinho_FO');
            $atualizarCarrinho_FO->description = 'Atualizar Carrinho';
            $auth->add($atualizarCarrinho_FO);

            // adiciona a permissão "apagarCarrinho_FO"
            $apagarCarrinho_FO = $auth->createPermission('apagarCarrinho_FO');
            $apagarCarrinho_FO->description = 'Apagar Carrinho';
            $auth->add($apagarCarrinho_FO);

            // adiciona a permissão "checkoutCarrinho_FO"
            $checkoutCarrinho_FO = $auth->createPermission('checkoutCarrinho_FO');
            $checkoutCarrinho_FO->description = 'Checkout Carrinho';
            $auth->add($checkoutCarrinho_FO);


            // adiciona a permissão "listaProdutos_FO"
            $listaProdutos_FO = $auth->createPermission('listaProdutos_FO');
            $listaProdutos_FO->description = 'Lista Produtos';
            $auth->add($listaProdutos_FO);

            // adiciona a permissão "verProdutos_FO"
            $verProdutos_FO = $auth->createPermission('verProdutos_FO');
            $verProdutos_FO->description = 'Ver Produtos';
            $auth->add($verProdutos_FO);

            // adiciona a role "cliente" e dá as seguintes permissões
            $cliente = $auth->createRole('cliente');
            $auth->add($cliente);
  
            $auth->addChild($cliente, $atualizarUtilizador_FO);
            $auth->addChild($cliente, $gerirFaturas_FO);
            $auth->addChild($cliente, $verFaturas_FO);

            $auth->addChild($cliente, $enviarAvaliacao_FO);

            $auth->addChild($cliente, $adicionarFavorito_FO);
            $auth->addChild($cliente, $removerFavorito_FO);

            $auth->addChild($cliente, $gerirCarrinho_FO);
            $auth->addChild($cliente, $adicionarCarrinho_FO);
            $auth->addChild($cliente, $atualizarCarrinho_FO);
            $auth->addChild($cliente, $apagarCarrinho_FO);
            $auth->addChild($cliente, $checkoutCarrinho_FO);

            $auth->addChild($cliente, $listaProdutos_FO);
            $auth->addChild($cliente, $verProdutos_FO);

            
            // adiciona a role "funcionario" e dá as seguintes permissões
            $funcionario = $auth->createRole('funcionario');
            $auth->add($funcionario);

            $auth->addChild($funcionario, $gerirUtilizadores);
            $auth->addChild($funcionario, $verUtilizadores);
            $auth->addChild($funcionario, $atualizarUtilizadores);

            $auth->addChild($funcionario, $gerirProdutos);
            $auth->addChild($funcionario, $criarProdutos);
            $auth->addChild($funcionario, $verProdutos);
            $auth->addChild($funcionario, $atualizarProdutos);
            $auth->addChild($funcionario, $apagarProdutos);

            $auth->addChild($funcionario, $gerirCategorias);
            $auth->addChild($funcionario, $criarCategorias);
            $auth->addChild($funcionario, $verCategorias);
            $auth->addChild($funcionario, $atualizarCategorias);
            $auth->addChild($funcionario, $apagarCategorias);

            $auth->addChild($funcionario, $gerirPromocoes);
            $auth->addChild($funcionario, $criarPromocoes);
            $auth->addChild($funcionario, $verPromocoes);
            $auth->addChild($funcionario, $atualizarPromocoes);
            $auth->addChild($funcionario, $apagarPromocoes);

            $auth->addChild($funcionario, $gerirAvaliacoes);
            $auth->addChild($funcionario, $criarAvaliacoes);
            $auth->addChild($funcionario, $verAvaliacoes);
            $auth->addChild($funcionario, $atualizarAvaliacoes);
            $auth->addChild($funcionario, $apagarAvaliacoes);

            $auth->addChild($funcionario, $gerirFaturas);
            $auth->addChild($funcionario, $verFaturas);

            $auth->addChild($funcionario, $cliente);

            // adiciona a role "admin" e dá as seguintes permissões
            // tambem obtem as permissões da role "funcionario"
            $admin = $auth->createRole('admin');
            $auth->add($admin);

            $auth->addChild($admin, $criarUtilizadores);
            $auth->addChild($admin, $apagarUtilizadores);

            $auth->addChild($admin, $mudarRoleUtilizador);
            
            $auth->addChild($admin, $criarFaturas);
            $auth->addChild($admin, $atualizarFaturas);
            $auth->addChild($admin, $apagarFaturas);

            $auth->addChild($admin, $funcionario);

            // Adicionar roles aos utilizadores
            $auth->assign($admin, 1);
            $auth->assign($admin, 2);
            $auth->assign($admin, 11);
            $auth->assign($funcionario, 12);
            $auth->assign($cliente, 15);
            $auth->assign($cliente, 16);
            $auth->assign($cliente, 17);

            // Para executar o ficheiro de migração de RBAC execute o seguinte comando:
            // yii rbac/init
        }
    }
