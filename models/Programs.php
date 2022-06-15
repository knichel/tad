<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property int $program_id
 * @property string $name
 * @property string $shortName
 * @property int $location_id
 *
 * @property Locations $location
 * @property Tad[] $tads
 * @property Users2programs[] $users2programs
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'shortName', 'location_id'], 'required'],
            [['location_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['shortName'], 'string', 'max' => 15],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Locations::className(), 'targetAttribute' => ['location_id' => 'location_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'program_id' => 'Program ID',
            'name' => 'Name',
            'shortName' => 'Short Name',
            'location_id' => 'Location ID',
        ];
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Locations::className(), ['location_id' => 'location_id']);
    }

    /**
     * Gets query for [[Tads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTads()
    {
        return $this->hasMany(Tad::className(), ['program_id' => 'program_id']);
    }

    /**
     * Gets query for [[Users2programs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers2programs()
    {
        return $this->hasMany(Users2programs::className(), ['program_id' => 'program_id']);
    }
}
