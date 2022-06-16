<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users2programs */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;
use app\models\SchoolYears;
use app\models\Users;
use app\models\Programs;

$usersList = ArrayHelper::map(Users::find()->all(),'user_id',
	function($model){
	    return $model['firstName'].' '.$model['lastName'];
	});

$schoolYearsList = ArrayHelper::map(SchoolYears::find()->all(),'schoolYear_id','description');

$programsList = ArrayHelper::map(Programs::find()->all(),'program_id','name');

?>

<div class="users2programs-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'schoolYear_id')->dropDownList($schoolYearsList,['prompt'=>'-- Choose a School Year --']) ?>
    <?= $form->field($model, 'user_id')->dropDownList($usersList,['prompt'=>'-- Choose a User --']) ?>
    <?= $form->field($model, 'program_id')->dropDownList($programsList,['prompt'=>'-- Choose a Program --']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
