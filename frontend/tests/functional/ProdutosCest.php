<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ProdutosCest
{
    public function addProdutoCarrinho(FunctionalTester $I)
    {
        $I->amOnRoute('/site/login');
        $I->fillField('LoginForm[username]', 'cliente1');
        $I->fillField('LoginForm[password]', '12345678');
        $I->click('login-button');

        $I->amOnRoute('/produto/view' , ['id' => 1]);
        $I->click('add-carrinho');

        $I->see('Air Force 1 Low Retro');
    }
}