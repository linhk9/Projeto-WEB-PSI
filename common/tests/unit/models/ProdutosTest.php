<?php

namespace common\tests\unit\models;

use common\models\Produtos;
use Yii;
use common\models\LoginForm;
use common\fixtures\UserFixture;

/**
 * Login form test
 */
class ProdutosTest extends \Codeception\Test\Unit
{
    public function testAtualizarCategoriaDoProduto()
    {
        $produto = new Produtos();
        $produto->nome = 'Produto Teste';
        $produto->preco = 100;
        $produto->id_categoria = 1;
        $produto->save();

        $produto->id_categoria = 2;
        $updateResult = $produto->save();

        $this->assertTrue($updateResult, 'Produto não foi atualizado corretamente');
        $this->assertEquals(2, $produto->id_categoria, 'Categoria do produto não foi atualizada corretamente');
    }

    public function testAtualizarProduto()
    {
        $produto = new Produtos();
        $produto->nome = 'Produto Teste';
        $produto->preco = 100;
        $produto->save();

        $produto->nome = 'Produto Atualizado';
        $updateResult = $produto->save();

        $this->assertTrue($updateResult, 'Produto não foi atualizado corretamente');
        $this->assertEquals('Produto Atualizado', $produto->nome, 'Nome do produto não foi atualizado corretamente');
    }

    public function testAtualizarStockDoProduto()
    {
        $produto = new Produtos();
        $produto->nome = 'Produto Teste';
        $produto->preco = 100;
        $produto->stock = 50;
        $produto->save();

        $produto->stock = 75;
        $updateResult = $produto->save();

        $this->assertTrue($updateResult, 'Produto não foi atualizado corretamente');
        $this->assertEquals(75, $produto->stock, 'Stock do produto não foi atualizado corretamente');
    }

    public function testProcurarProdutoPorNome()
    {
        $produto = new Produtos();
        $produto->nome = 'Produto Teste';
        $produto->preco = 100;
        $produto->save();

        $foundProduct = Produtos::findOne(['nome' => 'Produto Teste']);

        $this->assertNotNull($foundProduct, 'Produto não foi encontrado pelo nome');
        $this->assertEquals($produto->id, $foundProduct->id, 'Produto encontrado não corresponde ao produto criado');
    }

    public function testProcurarProdutoPorPreco()
    {
        $produto = new Produtos();
        $produto->nome = 'Produto Teste';
        $produto->preco = 100;
        $produto->save();

        $foundProduct = Produtos::findOne(['preco' => 100]);

        $this->assertNotNull($foundProduct, 'Produto não foi encontrado pelo preço');
        $this->assertEquals($produto->id, $foundProduct->id, 'Produto encontrado não corresponde ao produto criado');
    }
}
