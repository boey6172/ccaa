<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'season-athlete-form',
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
		<?php echo $form->labelEx($model,'athlete'); ?>
		<?php echo $form->textField($model,'athlete'); ?>
		<?php echo $form->error($model,'athlete'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->