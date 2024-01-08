<?php

namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class CheckoutCest
{
    public function checkout(AcceptanceTester $I)
    {
        $I->amOnPage(Url::to(['/site/login']));

        $I->fillField('Username', 'cliente1');
        $I->fillField('Password', '12345678');
        $I->click('login-button');

        $I->amOnPage(Url::to(['/produtos/view', 'id' => 1]));

        $I->click('Adicionar ao Carrinho', ['id' => 1, 'precoProduto' => 55.88]);

        $I->amOnPage(Url::to(['/carrinho/index']));

        $I->see('Air Force 1 Low Retro');

        $I->click('Finalizar Compra');
    }
}
