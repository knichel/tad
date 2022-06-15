<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users2programs".
 *
 * @property int $user2program_id
 * @property int $schoolYear_id
 * @property int $user_id
 * @property int $program_id
 *
 * @property Programs $program
 * @property SchoolYears $schoolYear
 * @property Users $user
 */
class Users2programs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users2programs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schoolYear_id', 'user_id', 'program_id'], 'required'],
            [['schoolYear_id', 'user_id', 'program_id'], 'integer'],
            [['program_id'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['program_id' => 'program_id']],
            [['schoolYear_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolYears::className(), 'targetAttribute' => ['schoolYear_id' => 'schoolYear_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user2program_id' => 'User 2program ID',
            'schoolYear_id' => 'School Year ID',
            'user_id' => 'User ID',
            'program_id' => 'Program ID',
        ];
    }

    /**
     * Gets query for [[Program]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgram()
    {
        return $this->hasOne(Programs::className(), ['program_id' => 'program_id']);
    }

    /**
     * Gets query for [[SchoolYear]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolYear()
    {
        return $this->hasOne(SchoolYears::className(), ['schoolYear_id' => 'schoolYear_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
