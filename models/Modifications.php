<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modifications".
 *
 * @property int $modification_id
 * @property string $description
 * @property string|null $code
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
            [['description'], 'required'],
            [['description'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'modification_id' => 'Modification ID',
            'description' => 'Description',
            'code' => 'Code',
        ];
    }
}
