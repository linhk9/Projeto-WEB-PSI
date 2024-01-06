<?php

namespace frontend\models;

use common\models\Userdata;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Perfil form
 */
class PerfilForm extends Model
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
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],

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

    public function guardar()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        $userData = Userdata::find()->where(['id_user' => Yii::$app->user->identity->id])->one();

        if ($user && $userData) {
            if ($this->password) {
                $user->setPassword($this->password);
            }
            $user->email = $this->email;

            $userData->primeiroNome = $this->primeiroNome;
            $userData->ultimoNome = $this->ultimoNome;
            $userData->telemovel = $this->telemovel;
            $userData->morada = $this->morada;

            if ($user->save() && $userData->save()) {
                return true;
            }
        }

        return null;
    }
}
