<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modifications".
 *
 * @property int $modification_id
 * @property string $name
 * @property string|null $shortCode
 */
class Modifications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['shortCode'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'modification_id' => 'Modification ID',
            'name' => 'Name',
            'shortCode' => 'Short Code',
        ];
    }
}
