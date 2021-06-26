<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $city
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string|null $experience_year
 * @property string|null $phone_number
 * @property string|null $email
 * @property string|null $specialists
 * @property string|null $animal_types
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['specialists', 'animal_types'], 'safe'],
            [['city', 'last_name', 'first_name', 'experience_year', 'phone_number', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'experience_year' => 'Experience Year',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'specialists' => 'Specialists',
            'animal_types' => 'Animal Types',
        ];
    }

    public function getFullName()
    {
        return $this->last_name . ' ' . $this->first_name;
    }
}
