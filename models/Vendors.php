<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendors".
 *
 * @property int $vendor_id
 * @property string $name
 *
 * @property Assessments[] $assessments
 */
class Vendors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Assessments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssessments()
    {
        return $this->hasMany(Assessments::className(), ['vendor_id' => 'vendor_id']);
    }
}
