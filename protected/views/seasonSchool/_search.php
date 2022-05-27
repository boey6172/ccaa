<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season'); ?>
		<?php echo $form->textField($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school'); ?>
		<?php echo $form->textField($model,'school'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->