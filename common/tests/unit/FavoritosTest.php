<?php

namespace unit;

use common\models\Favoritos;

/**
 * Login form test
 */
class FavoritosTest extends \Codeception\Test\Unit
{
    public function testDespoletarRegrasDeValidacao()
    {
        $favorito = new Favoritos();

        // Teste para despoletar todas as regras de validação
        $favorito->id_userdata = 'a';
        $favorito->id_produto = 'a';

        // Verificar se a validação falhou como esperado
        $this->assertFalse($favorito->validate(['id_userdata', 'id_produto']));
    }

    public function testCriarRegistoValido()
    {
        $favorito = new Favoritos();

        // Teste para criar um registo válido e guardar na BD
        $favorito->id_userdata = 4;
        $favorito->id_produto = 1;

        $this->assertTrue($favorito->save());
    }

    public function testVerRegistoValido()
    {
        // Teste para ver se o registo válido se encontra na BD
        $favorito = Favoritos::findOne(['id_userdata' => 4, 'id_produto' => 1]);
        $this->assertNotNull($favorito);
    }

    public function testLerRegistoAnteriorEAtualizar()
    {
        // Teste para ler o registo anterior e aplicar um update
        $favorito = Favoritos::findOne(['id_userdata' => 4, 'id_produto' => 1]);
        $favorito->id_produto = 2;
        $this->assertTrue($favorito->save());
    }

    public function testVerRegistoAtualizado()
    {
        // Teste para ver se o registo atualizado se encontra na BD
        $favorito = Favoritos::findOne(['id_userdata' => 4, 'id_produto' => 2]);
        $this->assertNotNull($favorito);
    }

    public function testApagarRegisto()
    {
        // Teste para apagar o registo
        $favorito = Favoritos::findOne(['id_userdata' => 4, 'id_produto' => 2]);
        $this->assertGreaterThan(0, $favorito->delete());
    }

    public function testVerificarRegistoApagado()
    {
        // Teste para verificar que o registo não se encontra na BD
        $favorito = Favoritos::findOne(['id_userdata' => 4, 'id_produto' => 2]);
        $this->assertNull($favorito);
    }
}
