<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property string $type
 *
 * @property Tad[] $tads
 * @property Tad[] $tads0
 * @property Users2programs[] $users2programs
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'password'], 'required'],
            [['type'], 'string'],
            [['firstName', 'lastName'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 75],
            [['password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[Tads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTads()
    {
        return $this->hasMany(Tad::className(), ['student_id' => 'user_id']);
    }

    /**
     * Gets query for [[Tads0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTads0()
    {
        return $this->hasMany(Tad::className(), ['teacher_id' => 'user_id']);
    }

    /**
     * Gets query for [[Users2programs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers2programs()
    {
        return $this->hasMany(Users2programs::className(), ['user_id' => 'user_id']);
    }
}
