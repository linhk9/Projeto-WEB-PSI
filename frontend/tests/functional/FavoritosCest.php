<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use common\fixtures\UserFixture;

class FavoritosCest
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

    public function addProdutoDeFavoritos(FunctionalTester $I)
    {
        $I->amOnRoute('/site/login');
        $I->fillField('LoginForm[username]', 'admin');
        $I->fillField('LoginForm[password]', 'admin123');
        $I->click('login-button');

        $I->amOnRoute('/produto/index');
        $I->click('add-favorites-button');

        $I->see('Produto adicionado aos favoritos');
    }

    public function removerProdutoDeFavoritos(FunctionalTester $I)
    {
        $I->amOnRoute('/site/login');
        $I->fillField('LoginForm[username]', 'admin');
        $I->fillField('LoginForm[password]', 'admin123');
        $I->click('login-button');

        $I->amOnRoute('/produto/index');
        $I->click('remove-favorites-button');

        $I->see('Produto removido dos favoritos');
    }
}