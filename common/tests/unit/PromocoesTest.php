<?php

namespace unit;

use common\models\Promocoes;

/**
 * Login form test
 */
class PromocoesTest extends \Codeception\Test\Unit
{
    public function testDespoletarRegrasDeValidacao()
    {
        $promocao = new Promocoes();

        // Teste para despoletar todas as regras de validação
        $promocao->id_produto = null;
        $promocao->desconto = 'a';
        $promocao->data_inicio = 123;
        $promocao->data_termino = 123;

        // Verificar se a validação falhou como esperado
        $this->assertFalse($promocao->validate(['id_produto', 'desconto', 'data_inicio', 'data_termino']));
    }

    public function testCriarRegistoValido()
    {
        $promocao = new Promocoes();

        // Teste para criar um registo válido e guardar na BD
        $promocao->id_produto = 1;
        $promocao->desconto = 25;
        $promocao->data_inicio = '2024-01-22';
        $promocao->data_termino = '2024-01-22';

        $this->assertTrue($promocao->save());
    }

    public function testVerRegistoValido()
    {
        // Teste para ver se o registo válido se encontra na BD
        $promocao = Promocoes::findOne(['data_inicio' => '2024-01-22', 'desconto' => '25']);
        $this->assertNotNull($promocao);
    }

    public function testLerRegistoAnteriorEAtualizar()
    {
        // Teste para ler o registo anterior e aplicar um update
        $promocao = Promocoes::findOne(['data_inicio' => '2024-01-22', 'desconto' => '25']);
        $promocao->desconto = 28;
        $this->assertTrue($promocao->save());
    }

    public function testVerRegistoAtualizado()
    {
        // Teste para ver se o registo atualizado se encontra na BD
        $promocao = Promocoes::findOne(['data_inicio' => '2024-01-22', 'desconto' => 28]);
        $this->assertNotNull($promocao);
    }

    public function testApagarRegisto()
    {
        // Teste para apagar o registo
        $promocao = Promocoes::findOne(['data_inicio' => '2024-01-22', 'desconto' => 28]);
        $this->assertGreaterThan(0, $promocao->delete());
    }

    public function testVerificarRegistoApagado()
    {
        // Teste para verificar que o registo não se encontra na BD
        $promocao = Promocoes::findOne(['data_inicio' => '2024-01-22', 'desconto' => 28]);
        $this->assertNull($promocao);
    }
}
