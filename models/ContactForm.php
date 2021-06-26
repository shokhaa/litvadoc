<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $last_name;
    public $cities;
    public $agree;
    public $first_name;
    public $specialists;
    public $verifyCode;
    public $experience_year;
    public $phone_number;
    public $animal_types;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['email', 'phone_number', 'last_name', 'first_name', 'experience_year',  'cities'], 'required'],
            // email has to be a valid email address
            ['specialists', 'required', 'message' => 'Выберите специализацию'],
            ['animal_types', 'required', 'message' => 'Выберите специализацию'],
            ['agree', 'required', 'message' => 'необходимо ваше согласие на вышеуказанные условия'],
            ['email', 'email'],
            // verifyCode needs to be entered correctly
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'animal_types' => 'Тип животных',
            'specialists' => 'Специалноисты',
            'agree' => 'Соглашение'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {



        if ($this->validate()) {
            $contact = new Contact([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'city' => $this->cities,
                'phone_number' => $this->phone_number,
                'animal_types' => $this->animal_types,
                'experience_year' => $this->experience_year,
                'specialists' => $this->specialists
            ]);
            $contact->save();
            Yii::$app->mailer->compose('contact', ['contact' => $contact])
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->last_name. ' '.$this->first_name])
                ->setTo($email)
                ->setSubject('Заявка на регистрацию!')
                ->send();
            return true;
        }
        return false;
    }
}
