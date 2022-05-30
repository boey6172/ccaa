<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'profile_pic'); ?>
		<?php echo $form->textArea($model,'profile_pic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'profile_pic'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'is_activated'); ?>
		<?php echo $form->textField($model,'is_activated'); ?>
		<?php echo $form->error($model,'is_activated'); ?>
	</div> -->
	<div class="col-sm-1">
		Role
	</div>
	<div class="col-sm-5">
 <?php
 $this->widget(
	'booster.widgets.TbSelect2',
	array(
			'asDropDownList' => true,
			'name' => 'role',
			'options' => array(
					'tags' => array('rxAdmin', 'Co-Admin', 'school-co'),
					'placeholder' => 'Roles',
					'width' => '40%',
					'tokenSeparators' => array(',', ' ')
			)
	)
);
 ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->