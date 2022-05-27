<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'season-school-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->textField($model,'season'); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school'); ?>
		<?php echo $form->textField($model,'school'); ?>
		<?php echo $form->error($model,'school'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->