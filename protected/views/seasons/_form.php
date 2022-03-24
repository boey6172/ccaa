<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'seasonsForm',
		'type' => 'vertical',
	)
);
?>

<div class="form">

<?php 

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	

	<div class="box-body">
	<div class="col-md-4">
				<?php
					echo $form->textFieldGroup($model, 'number', array(
						'widgetOptions' => array(
							'htmlOptions' => array(
								'autocomplete' => 'off',
							)
						)
					));
				?>

			

			</div>	

			<div class="col-md-4">
					<?php
						echo $form->textFieldGroup($model, 'theme', array(
							'widgetOptions' => array(
								'htmlOptions' => array(
									'autocomplete' => 'off',
								)
							)
						));
					?>
			</div>

			

	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->