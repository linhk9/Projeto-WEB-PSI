<?php

namespace frontend\tests\functional;

use common\models\User;
use frontend\tests\FunctionalTester;

class RegistoCest
{
    public function registoComSucesso(FunctionalTester $I)
    {
        $I->amOnRoute('site/signup');

        $I->submitForm('#form-signup', [
            'SignupForm[username]' => 'tester',
            'SignupForm[email]' => 'tester@gmail.com',
            'SignupForm[password]' => 'passwordxpto',
            'SignupForm[primeiroNome]' => 'tester',
            'SignupForm[ultimoNome]' => 'xpto',
            'SignupForm[telemovel]' => 912345678,
            'SignupForm[morada]' => 'Leiria',
        ]);

        $I->seeRecord('common\models\User', [
            'username' => 'tester',
            'email' => 'tester@gmail.com',
            'status' => User::STATUS_ACTIVE
        ]);
    }

    public function loginUser(FunctionalTester $I)
    {
        $I->amOnPage('/site/login');
        $I->fillField('LoginForm[username]', 'cliente1');
        $I->fillField('LoginForm[password]', '12345678');
        $I->click('login-button');

        $I->amOnPage('/site/index');
        $I->see('Não tens nenhum produto adicionado aos favoritos!', 'p');

        $I->seeCurrentUrlEquals('/site/index');
    }
}
