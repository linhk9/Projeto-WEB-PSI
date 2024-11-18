<?php

namespace frontend\models;

use common\models\Userdata;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $primeiroNome;
    public $ultimoNome;
    public $telemovel;
    public $morada;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['primeiroNome', 'required'],
            ['primeiroNome', 'string', 'min' => 2, 'max' => 255],

            ['ultimoNome', 'required'],
            ['ultimoNome', 'string', 'min' => 2, 'max' => 255],

            ['telemovel', 'required'],
            ['telemovel', 'integer'],

            ['morada', 'required'],
            ['morada', 'string', 'min' => 2, 'max' => 255],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        if ($user->save()) {
            $userData = new Userdata();
            $userData->primeiroNome = $this->primeiroNome;
            $userData->ultimoNome = $this->ultimoNome;
            $userData->telemovel = $this->telemovel;
            $userData->morada = $this->morada;
            $userData->id_user = $user->id;

            $userDataCreated = $userData->save();

            $auth = \Yii::$app->authManager;
            $role = $auth->getRole('cliente');
            $auth->assign($role, $user->getId());

            return $userDataCreated;
        }

        return null;
    }

}
