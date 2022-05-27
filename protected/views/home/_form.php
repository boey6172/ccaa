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
	<div class="row">
	<div class="col-md-12">
		<?php
			$this->widget(
			    'booster.widgets.TbButton',
			    array(
			    	// 'buttonType' => 'submit',
			        'label' => 'Save',
			        'context' => 'success',
			        'htmlOptions' => array(
			        	'class' => 'save_department_btn btn cus_btn btn-mp btn-primary pull-right',
			        ),
			    )
			);
		?>

	</div>
</div>

<?php $this->endWidget(); ?>
<?php
	$season = Yii::app()->createUrl( "Home/SeasonSave" );
	$addEvent = Yii::app()->createUrl( "Home/addEvent&id=" );

	$success = 'success';
	$error = 'error';

   Yii::app()->clientScript->registerScript('script_season', "


	function saveExpenses()
	{
		$.ajax({
	        type        : 'POST',
	        url         : '{$season}',
	        data        : $('#seasonsForm').serialize(),
	        cache       : false,
	        success     : function( data ) {
	            var json = $.parseJSON( data );

	            if(json.retVal == '{$success}')
	            {
	            	window.location =  '{$addEvent}' + json.retMessage; 
	            }
	            else if(json.retVal == '{$error}')
	            {
	                $.notify(json.retMessage, json.retVal);
	            }
	        }
	    })
	}


	$( '.save_department_btn' ).click(function() {
		saveExpenses();
		window.location =  '{$addEvent}'; 
	});

   ");
?>

</div><!-- form -->