<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assessments".
 *
 * @property int $assessment_id
 * @property int $name
 * @property int $vendor_id
 *
 * @property Vendors $vendor
 */
class Assessments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assessments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'vendor_id'], 'required'],
            [['name', 'vendor_id'], 'integer'],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendors::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'assessment_id' => 'Assessment ID',
            'name' => 'Name',
            'vendor_id' => 'Vendor ID',
        ];
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendors::className(), ['vendor_id' => 'vendor_id']);
    }
}
