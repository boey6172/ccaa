<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */
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
		<?php echo $form->label($model,'athlete'); ?>
		<?php echo $form->textField($model,'athlete'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->