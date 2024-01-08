<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use common\fixtures\UserFixture;

class ProdutosCest
{
    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ];
    }

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