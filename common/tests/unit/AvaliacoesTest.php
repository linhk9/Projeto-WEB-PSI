<?php

namespace unit;

use common\models\Avaliacoes;

/**
 * Login form test
 */
class AvaliacoesTest extends \Codeception\Test\Unit
{
    public function testDespoletarRegrasDeValidacao()
    {
        $avaliacao = new Avaliacoes();

        // Teste para despoletar todas as regras de validação
        $avaliacao->id_userdata = null;
        $avaliacao->id_produto = null;
        $avaliacao->nota = 'abcd';
        $avaliacao->comentario = 124214;

        // Verificar se a validação falhou como esperado
        $this->assertFalse($avaliacao->validate(['id_userdata', 'id_produto', 'nota', 'comentario']));
    }

    public function testCriarRegistoValido()
    {
        $avaliacao = new Avaliacoes();

        // Teste para criar um registo válido e guardar na BD
        $avaliacao->id_userdata = 4;
        $avaliacao->id_produto = 1;
        $avaliacao->nota = 4;
        $avaliacao->comentario = 'Avaliacao Teste';

        $this->assertTrue($avaliacao->save());
    }

    public function testVerRegistoValido()
    {
        // Teste para ver se o registo válido se encontra na BD
        $avaliacao = Avaliacoes::findOne(['comentario' => 'Avaliacao Teste']);
        $this->assertNotNull($avaliacao);
    }

    public function testLerRegistoAnteriorEAtualizar()
    {
        // Teste para ler o registo anterior e aplicar um update
        $avaliacao = Avaliacoes::findOne(['comentario' => 'Avaliacao Teste']);
        $avaliacao->comentario = 'Avaliacao Teste Atualizado';
        $this->assertTrue($avaliacao->save());
    }

    public function testVerRegistoAtualizado()
    {
        // Teste para ver se o registo atualizado se encontra na BD
        $avaliacao = Avaliacoes::findOne(['comentario' => 'Avaliacao Teste Atualizado']);
        $this->assertNotNull($avaliacao);
    }

    public function testApagarRegisto()
    {
        // Teste para apagar o registo
        $avaliacao = Avaliacoes::findOne(['comentario' => 'Avaliacao Teste Atualizado']);
        $this->assertGreaterThan(0, $avaliacao->delete());
    }

    public function testVerificarRegistoApagado()
    {
        // Teste para verificar que o registo não se encontra na BD
        $avaliacao = Avaliacoes::findOne(['comentario' => 'Avaliacao Teste Atualizado']);
        $this->assertNull($avaliacao);
    }
}
