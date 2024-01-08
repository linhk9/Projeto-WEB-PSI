<?php

namespace frontend\tests\functional;

use common\models\User;
use frontend\tests\FunctionalTester;

class RegistoCest
{
    protected $formId = '#form-signup';


    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/signup');
    }

    public function registoComSucesso(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
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


}
