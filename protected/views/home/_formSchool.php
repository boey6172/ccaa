<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'season_school_form',
		'type' => 'vertical',
	)
);
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->hiddenField($model,'season'); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="col-sm-3">
            <?php
            $SchoolList1 = CHtml::listData( School::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'school',
                array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-8 ',
                    ),
                    'widgetOptions' => array(
                        'data' => $SchoolList1,
                        'options' => array(
                            'placeholder' => 'Select School',
                        ),
                    ),
                )
            );?>
        </div>
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

	<div class="col-md-12">
		<?php
			$this->widget(
			    'booster.widgets.TbButton',
			    array(
			    	// 'buttonType' => 'submit',
			        'label' => 'Add Athlete',
			        'context' => 'success',
			        'htmlOptions' => array(
			        	'class' => 'add_Athlete btn cus_btn btn-mp btn-primary pull-right',
			        ),
			    )
			);
		?>

	</div>


<?php $this->endWidget(); ?>
<?php
	$schoolSave = Yii::app()->createUrl( "Home/SchoolSave" );
	$addSchool = Yii::app()->createUrl( "Home/AddAthlete&id=" );
	$addAthlete = Yii::app()->createUrl( "Home/AddAthlete&id=" );

	$success = 'success';
	$error = 'error';

   Yii::app()->clientScript->registerScript('script_event', "


	function saveExpenses()
	{
		$.ajax({
	        type        : 'POST',
	        url         : '{$schoolSave}',
	        data        : $('#season_school_form').serialize(),
	        cache       : false,
	        success     : function( data ) {
	            var json = $.parseJSON( data );

	            if(json.retVal == '{$success}')
	            {
	            	// window.location =  '{$addSchool}' + json.retMessage; 
								alert('success');
								reloadGrid();
	            }
	            else if(json.retVal == '{$error}')
	            {
	                alert(json.retMessage);
	            }
	        }
	    })
	}


	$( '.save_department_btn' ).click(function() {
		saveExpenses();
	});

	$( '.add_Athlete' ).click(function() {
		var id = $('#SeasonSchool_season').val();
		window.location = '{$addAthlete}' + id
	});

	function reloadGrid()
	{
		$('#seasons-school-grid').yiiGridView('update', {
			type:'POST',
			data: $(this).serialize()
		});
		return false;
	}

   ");
?>


</div><!-- form -->