<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tad */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;
use app\models\SchoolYears;
use app\models\Programs;
use app\models\Users;
use app\models\Assessments;
use app\models\Modifications;

$schoolYearsList = ArrayHelper::map(SchoolYears::find()->all(),'schoolYear_id','description');
$programsList = ArrayHelper::map(Programs::find()->all(),'program_id','name');

$studentsList = ArrayHelper::map(Users::find()->where(['type'=>'student'])->orderBy('lastName')->all(),'user_id',
        function($model){
            return $model['firstName'].' '.$model['lastName'];
        });

$teachersList = ArrayHelper::map(Users::find()->where(['type'=>'teacher'])->orderBy('lastName')->all(),'user_id',
        function($model){
            return $model['firstName'].' '.$model['lastName'];
        });

$writtenAssessmentsList = ArrayHelper::map(Assessments::find()->where(['type'=>'written'])->all(),'assessment_id',
	function($model){
	    return $model['name'].' ('.$model['type'].')';
	});
$performanceAssessmentsList = ArrayHelper::map(Assessments::find()->where(['type'=>'performance'])->all(),'assessment_id',
	function($model){
	    return $model['name'].' ('.$model['type'].')';
	});

$modificationsList = ArrayHelper::map(Modifications::find()->all(),'modification_id','name');



?>

<div class="tad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schoolYear_id')->dropDownList($schoolYearsList,['prompt'=>'-- Choose a School Year --']) ?>

    <?= $form->field($model, 'program_id')->dropDownList($programsList,['prompt'=>'-- Choose a Program --']) ?>

    <?= $form->field($model, 'student_id')->dropDownList($studentsList,['prompt'=>'-- Choose a Student --']) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList($teachersList,['prompt'=>'-- Choose a Teacher --']) ?>

    <?= $form->field($model, 'written_id')->dropDownList($writtenAssessmentsList,['prompt'=>'-- Choose an Assessment --']) ?>

    <?= $form->field($model, 'written_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => 'Pass/Fail']) ?>

    <?= $form->field($model, 'practical_id')->dropDownList($performanceAssessmentsList,['prompt'=>'-- Choose anAssessment --']) ?>

    <?= $form->field($model, 'practical_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => 'Pass/Fail']) ?>

    <?= $form->field($model, 'portfolio_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => 'Pass/Fail']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
