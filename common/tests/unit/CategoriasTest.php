<?php

namespace unit;

use common\models\Categorias;

/**
 * Login form test
 */
class CategoriasTest extends \Codeception\Test\Unit
{
    public function testDespoletarRegrasDeValidacao()
    {
        $categoria = new Categorias();

        // Teste para despoletar todas as regras de validação
        $categoria->nome = 121;

        // Verificar se a validação falhou como esperado
        $this->assertFalse($categoria->validate(['nome']));
    }

    public function testCriarRegistoValido()
    {
        $categoria = new Categorias();

        // Teste para criar um registo válido e guardar na BD
        $categoria->nome = 'XPTO';

        $this->assertTrue($categoria->save());
    }

    public function testVerRegistoValido()
    {
        // Teste para ver se o registo válido se encontra na BD
        $categoria = Categorias::findOne(['nome' => 'XPTO']);
        $this->assertNotNull($categoria);
    }

    public function testLerRegistoAnteriorEAtualizar()
    {
        // Teste para ler o registo anterior e aplicar um update
        $categoria = Categorias::findOne(['nome' => 'XPTO']);
        $categoria->nome = 'XPTO Atualizado';
        $this->assertTrue($categoria->save());
    }

    public function testVerRegistoAtualizado()
    {
        // Teste para ver se o registo atualizado se encontra na BD
        $categoria = Categorias::findOne(['nome' => 'XPTO Atualizado']);
        $this->assertNotNull($categoria);
    }

    public function testApagarRegisto()
    {
        // Teste para apagar o registo
        $categoria = Categorias::findOne(['nome' => 'XPTO Atualizado']);
        $this->assertGreaterThan(0, $categoria->delete());
    }

    public function testVerificarRegistoApagado()
    {
        // Teste para verificar que o registo não se encontra na BD
        $categoria = Categorias::findOne(['nome' => 'XPTO Atualizado']);
        $this->assertNull($categoria);
    }
}
