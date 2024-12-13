<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        //Para migrar o RBAC na BD
        // yii rbac/init

        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $gerirUtilizadores = $auth->createPermission('gerirUtilizadores');
        $gerirUtilizadores->description = 'Gerir Utilizadores';
        $auth->add($gerirUtilizadores);

        $verUtilizadores = $auth->createPermission('verUtilizadores');
        $verUtilizadores->description = 'Ver Utilizadores';
        $auth->add($verUtilizadores);

        $criarUtilizadores = $auth->createPermission('criarUtilizadores');
        $criarUtilizadores->description = 'Criar Utilizadores';
        $auth->add($criarUtilizadores);

        $atualizarUtilizadores = $auth->createPermission('atualizarUtilizadores');
        $atualizarUtilizadores->description = 'Atualizar Utilizadores';
        $auth->add($atualizarUtilizadores);

        $apagarUtilizadores = $auth->createPermission('apagarUtilizadores');
        $apagarUtilizadores->description = 'Apagar Utilizadores';
        $auth->add($apagarUtilizadores);

        $gerirCursos = $auth->createPermission('gerirCursos');
        $gerirCursos->description = 'Gerir Cursos';
        $auth->add($gerirCursos);

        $criarCursos = $auth->createPermission('criarCursos');
        $criarCursos->description = 'Criar Cursos';
        $auth->add($criarCursos);

        $verCursos = $auth->createPermission('verCursos');
        $verCursos->description = 'Ver Cursos';
        $auth->add($verCursos);

        $atualizarCursos = $auth->createPermission('atualizarCursos');
        $atualizarCursos->description = 'Atualizar Cursos';
        $auth->add($atualizarCursos);

        $apagarCursos = $auth->createPermission('apagarCursos');
        $apagarCursos->description = 'Apagar Cursos';
        $auth->add($apagarCursos);

        $gerirProdutos = $auth->createPermission('gerirProdutos');
        $gerirProdutos->description = 'Gerir Produtos';
        $auth->add($gerirProdutos);

        $criarProdutos = $auth->createPermission('criarProdutos');
        $criarProdutos->description = 'Criar Produtos';
        $auth->add($criarProdutos);

        $verProdutos = $auth->createPermission('verProdutos');
        $verProdutos->description = 'Ver Produtos';
        $auth->add($verProdutos);

        $atualizarProdutos = $auth->createPermission('atualizarProdutos');
        $atualizarProdutos->description = 'Atualizar Produtos';
        $auth->add($atualizarProdutos);

        $apagarProdutos = $auth->createPermission('apagarProdutos');
        $apagarProdutos->description = 'Apagar Produtos';
        $auth->add($apagarProdutos);

        $gerirCategorias = $auth->createPermission('gerirCategorias');
        $gerirCategorias->description = 'Gerir Categorias';
        $auth->add($gerirCategorias);

        $criarCategorias = $auth->createPermission('criarCategorias');
        $criarCategorias->description = 'Criar Categorias';
        $auth->add($criarCategorias);

        $verCategorias = $auth->createPermission('verCategorias');
        $verCategorias->description = 'Ver Categorias';
        $auth->add($verCategorias);

        $atualizarCategorias = $auth->createPermission('atualizarCategorias');
        $atualizarCategorias->description = 'Atualizar Categorias';
        $auth->add($atualizarCategorias);

        $apagarCategorias = $auth->createPermission('apagarCategorias');
        $apagarCategorias->description = 'Apagar Categorias';
        $auth->add($apagarCategorias);

        $gerirPromocoes = $auth->createPermission('gerirPromocoes');
        $gerirPromocoes->description = 'Gerir Promocoes';
        $auth->add($gerirPromocoes);

        $criarPromocoes = $auth->createPermission('criarPromocoes');
        $criarPromocoes->description = 'Criar Promocoes';
        $auth->add($criarPromocoes);

        $verPromocoes = $auth->createPermission('verPromocoes');
        $verPromocoes->description = 'Ver Promocoes';
        $auth->add($verPromocoes);

        $atualizarPromocoes = $auth->createPermission('atualizarPromocoes');
        $atualizarPromocoes->description = 'Atualizar Promocoes';
        $auth->add($atualizarPromocoes);

        $apagarPromocoes = $auth->createPermission('apagarPromocoes');
        $apagarPromocoes->description = 'Apagar Promocoes';
        $auth->add($apagarPromocoes);

        $gerirFaturas = $auth->createPermission('gerirFaturas');
        $gerirFaturas->description = 'Gerir Faturas';
        $auth->add($gerirFaturas);

        $verFaturas = $auth->createPermission('verFaturas');
        $verFaturas->description = 'Ver Faturas';
        $auth->add($verFaturas);

        $criarFaturas = $auth->createPermission('criarFaturas');
        $criarFaturas->description = 'Criar Faturas';
        $auth->add($criarFaturas);

        $atualizarFaturas = $auth->createPermission('atualizarFaturas');
        $atualizarFaturas->description = 'Atualizar Faturas';
        $auth->add($atualizarFaturas);

        $apagarFaturas = $auth->createPermission('apagarFaturas');
        $apagarFaturas->description = 'Apagar Faturas';
        $auth->add($apagarFaturas);

        $gerirAvaliacoes = $auth->createPermission('gerirAvaliacoes');
        $gerirAvaliacoes->description = 'Gerir Avaliacoes';
        $auth->add($gerirAvaliacoes);

        $verAvaliacoes = $auth->createPermission('verAvaliacoes');
        $verAvaliacoes->description = 'Ver Avaliacoes';
        $auth->add($verAvaliacoes);

        $criarAvaliacoes = $auth->createPermission('criarAvaliacoes');
        $criarAvaliacoes->description = 'Criar Avaliacoes';
        $auth->add($criarAvaliacoes);

        $atualizarAvaliacoes = $auth->createPermission('atualizarAvaliacoes');
        $atualizarAvaliacoes->description = 'Atualizar Avaliacoes';
        $auth->add($atualizarAvaliacoes);

        $apagarAvaliacoes = $auth->createPermission('apagarAvaliacoes');
        $apagarAvaliacoes->description = 'Apagar Avaliacoes';
        $auth->add($apagarAvaliacoes);

        $mudarRoleUtilizador = $auth->createPermission('mudarRoleUtilizador');
        $mudarRoleUtilizador->description = 'Mudar Role Utilizador';
        $auth->add($mudarRoleUtilizador);

        //Permissoões front-end
        $atualizarUtilizador_FO = $auth->createPermission('atualizarUtilizador_FO');
        $atualizarUtilizador_FO->description = 'Atualizar Perfil';
        $auth->add($atualizarUtilizador_FO);

        $gerirFaturas_FO = $auth->createPermission('gerirFaturas_FO');
        $gerirFaturas_FO->description = 'Gerir Faturas';
        $auth->add($gerirFaturas_FO);

        $verFaturas_FO = $auth->createPermission('verFaturas_FO');
        $verFaturas_FO->description = 'Ver Faturas';
        $auth->add($verFaturas_FO);

        $enviarAvaliacao_FO = $auth->createPermission('enviarAvaliacao_FO');
        $enviarAvaliacao_FO->description = 'Enviar Avaliação';
        $auth->add($enviarAvaliacao_FO);

        $adicionarFavorito_FO = $auth->createPermission('adicionarFavorito_FO');
        $adicionarFavorito_FO->description = 'Adicionar Favoritos';
        $auth->add($adicionarFavorito_FO);

        $removerFavorito_FO = $auth->createPermission('removerFavorito_FO');
        $removerFavorito_FO->description = 'Remover Favoritos';
        $auth->add($removerFavorito_FO);

        $gerirCarrinho_FO = $auth->createPermission('gerirCarrinho_FO');
        $gerirCarrinho_FO->description = 'Gerir Carrinho';
        $auth->add($gerirCarrinho_FO);

        $adicionarCarrinho_FO = $auth->createPermission('adicionarCarrinho_FO');
        $adicionarCarrinho_FO->description = 'Adicionar Carrinho';
        $auth->add($adicionarCarrinho_FO);

        $atualizarCarrinho_FO = $auth->createPermission('atualizarCarrinho_FO');
        $atualizarCarrinho_FO->description = 'Atualizar Carrinho';
        $auth->add($atualizarCarrinho_FO);

        $apagarCarrinho_FO = $auth->createPermission('apagarCarrinho_FO');
        $apagarCarrinho_FO->description = 'Apagar Carrinho';
        $auth->add($apagarCarrinho_FO);

        $checkoutCarrinho_FO = $auth->createPermission('checkoutCarrinho_FO');
        $checkoutCarrinho_FO->description = 'Checkout Carrinho';
        $auth->add($checkoutCarrinho_FO);

        $listaProdutos_FO = $auth->createPermission('listaProdutos_FO');
        $listaProdutos_FO->description = 'Lista Produtos';
        $auth->add($listaProdutos_FO);

        $verProdutos_FO = $auth->createPermission('verProdutos_FO');
        $verProdutos_FO->description = 'Ver Produtos';
        $auth->add($verProdutos_FO);




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

        $funcionario = $auth->createRole('funcionario');
        $auth->add($funcionario);

        $auth->addChild($funcionario, $gerirUtilizadores);
        $auth->addChild($funcionario, $verUtilizadores);
        $auth->addChild($funcionario, $atualizarUtilizadores);

        $auth->addChild($funcionario, $gerirCursos);
        $auth->addChild($funcionario, $criarCursos);
        $auth->addChild($funcionario, $verCursos);
        $auth->addChild($funcionario, $atualizarCursos);
        $auth->addChild($funcionario, $apagarCursos);

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
        $auth->assign($funcionario, 3);
        $auth->assign($cliente, 4);
        $auth->assign($cliente, 5);
        $auth->assign($cliente, 6);

    }
}