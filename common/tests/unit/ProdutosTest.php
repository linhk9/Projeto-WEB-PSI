<?php

namespace unit;

use common\models\Produtos;

/**
 * Login form test
 */
class ProdutosTest extends \Codeception\Test\Unit
{
    public function testDespoletarRegrasDeValidacao()
    {
        $produto = new Produtos();

        // Teste para despoletar todas as regras de validação
        $produto->id_categoria = null;
        $produto->nome = 124;
        $produto->descricao = 124124;
        $produto->preco = 'awgawg';
        $produto->stock = 'awgawg';
        $produto->imagem = null;
        $produto->marca = 124124;
        $produto->tamanho = 1421;
        $produto->cores = 124124;

        // Verificar se a validação falhou como esperado
        $this->assertFalse($produto->validate(['nome', 'descricao', 'preco', 'stock', 'imagem', 'marca', 'tamanho', 'cores']));
    }

    public function testCriarRegistoValido()
    {
        $produto = new Produtos();

        // Teste para criar um registo válido e guardar na BD
        $produto->id_categoria = 1;
        $produto->nome = 'Produto Teste';
        $produto->descricao = 'Descricao Teste';
        $produto->preco = 10.99;
        $produto->stock = 100;
        $produto->imagem = 'imagem.jpg';
        $produto->marca = 'Marca Teste';
        $produto->tamanho = 'M';
        $produto->cores = 'Azul';
        $this->assertTrue($produto->save());
    }

    public function testVerRegistoValido()
    {
        // Teste para ver se o registo válido se encontra na BD
        $produto = Produtos::findOne(['nome' => 'Produto Teste']);
        $this->assertNotNull($produto);
    }

    public function testLerRegistoAnteriorEAtualizar()
    {
        // Teste para ler o registo anterior e aplicar um update
        $produto = Produtos::findOne(['nome' => 'Produto Teste']);
        $produto->nome = 'Produto Teste Atualizado';
        $this->assertTrue($produto->save());
    }

    public function testVerRegistoAtualizado()
    {
        // Teste para ver se o registo atualizado se encontra na BD
        $produto = Produtos::findOne(['nome' => 'Produto Teste Atualizado']);
        $this->assertNotNull($produto);
    }

    public function testApagarRegisto()
    {
        // Teste para apagar o registo
        $produto = Produtos::findOne(['nome' => 'Produto Teste Atualizado']);
        $this->assertGreaterThan(0, $produto->delete());
    }

    public function testVerificarRegistoApagado()
    {
        // Teste para verificar que o registo não se encontra na BD
        $produto = Produtos::findOne(['nome' => 'Produto Teste Atualizado']);
        $this->assertNull($produto);
    }
}
