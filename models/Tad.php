<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tad".
 *
 * @property int $tad_id
 * @property int $schoolYear_id
 * @property int $program_id
 * @property int $student_id
 * @property int $teacher_id
 * @property int $written_id
 * @property string $written_score
 * @property int $practical_id
 * @property string $practical_score
 * @property string $portfolio_score
 *
 * @property Programs $program
 * @property SchoolYears $schoolYear
 * @property Users $student
 * @property Users $teacher
 */
class Tad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schoolYear_id', 'program_id', 'student_id', 'teacher_id', 'written_id', 'written_score', 'practical_id', 'practical_score', 'portfolio_score'], 'required'],
            [['schoolYear_id', 'program_id', 'student_id', 'teacher_id', 'written_id', 'practical_id'], 'integer'],
            [['written_score', 'practical_score', 'portfolio_score'], 'string'],
            [['program_id'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['program_id' => 'program_id']],
            [['schoolYear_id'], 'exist', 'skipOnError' => true, 'targetClass' => SchoolYears::className(), 'targetAttribute' => ['schoolYear_id' => 'schoolYear_id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['student_id' => 'user_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['teacher_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tad_id' => 'Tad ID',
            'schoolYear_id' => 'School Year ID',
            'program_id' => 'Program ID',
            'student_id' => 'Student ID',
            'teacher_id' => 'Teacher ID',
            'written_id' => 'Written ID',
            'written_score' => 'Written Score',
            'practical_id' => 'Practical ID',
            'practical_score' => 'Practical Score',
            'portfolio_score' => 'Portfolio Score',
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
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'student_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'teacher_id']);
    }
}
