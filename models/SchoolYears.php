<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schoolYears".
 *
 * @property int $schoolYear_id
 * @property string $description
 * @property string $isCurrent
 *
 * @property Tad[] $tads
 * @property Users2programs[] $users2programs
 */
class SchoolYears extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schoolYears';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['isCurrent'], 'string'],
            [['description'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'schoolYear_id' => 'School Year ID',
            'description' => 'Description',
            'isCurrent' => 'Is Current',
        ];
    }

    /**
     * Gets query for [[Tads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTads()
    {
        return $this->hasMany(Tad::className(), ['schoolYear_id' => 'schoolYear_id']);
    }

    /**
     * Gets query for [[Users2programs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers2programs()
    {
        return $this->hasMany(Users2programs::className(), ['schoolYear_id' => 'schoolYear_id']);
    }
}
