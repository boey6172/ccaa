<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'schoolForm',
		'type' => 'vertical',
	)
);
?>

<!--<div class="form">--->

<?php 
// $form=$this->beginWidget('CActiveForm', array(
// 	'id'=>'school-form',
// 	// Please note: When you enable ajax validation, make sure the corresponding
// 	// controller action is handling ajax validation correctly.
// 	// There is a call to performAjaxValidation() commented in generated controller code.
// 	// See class documentation of CActiveForm for details on this.
// 	'enableAjaxValidation'=>false,
// ));
 ?>
<div class="form">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="box-body">
	<div class="row">

		<div class="col-md-4">
			<?php
				echo $form->textFieldGroup($model, 'name', array(
					'widgetOptions' => array(
						'htmlOptions' => array(
							'autocomplete' => 'off',
						)
					)
				));
			?>
		</div>	

		<div class="col-md-2">
				<?php
					echo $form->textFieldGroup($model, 'acr', array(
						'widgetOptions' => array(
							'htmlOptions' => array(
								'autocomplete' => 'off',
							)
						)
					));
				?>
		</div>

		<div class="col-md-3">
				<?php
					echo $form->textFieldGroup($model, 'logo', array(
						'widgetOptions' => array(
							'htmlOptions' => array(
								'autocomplete' => 'off',
							)
						)
					));
				?>
		</div>

		<div class="col-md-3">
				<?php
					echo $form->textFieldGroup($model, 'address', array(
						'widgetOptions' => array(
							'htmlOptions' => array(
								'autocomplete' => 'off',
							)
						)
					));
				?>
		</div>
	</div>
</div>

		

	<div class="row buttons" style ="padding-left: 45px;">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div>

