<?php
/* @var $this SeasonEventController */
/* @var $model SeasonEvent */
/* @var $form CActiveForm */
?>



<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'season_event_form',
		'type' => 'vertical',
	)
);
?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="col-sm-3">
            <?php
            $EventList = CHtml::listData( Event::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'event',
                array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-8 ',
                    ),
                    'widgetOptions' => array(
                        'data' => $EventList,
                        'options' => array(
                            'placeholder' => 'Select Event',
                        ),
                    ),
                )
            );?>
        </div>
				<div class="col-sm-3">
            <?php
            $CategoryList = CHtml::listData( Category::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'category',
                array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-8 ',
                    ),
                    'widgetOptions' => array(
                        'data' => $CategoryList,
                        'options' => array(
                            'placeholder' => 'Select Category',
                        ),
                    ),
                )
            );?>
        </div>



	<div class="row">
		<!-- <?php echo $form->labelEx($model,'season'); ?> -->
		<?php echo $form->hiddenField($model,'season'); ?>
		<!-- <?php echo $form->error($model,'season'); ?> -->
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
			        'label' => 'Add School',
			        'context' => 'success',
			        'htmlOptions' => array(
			        	'class' => 'add_School btn cus_btn btn-mp btn-primary pull-right',
			        ),
			    )
			);
		?>

	</div>

<?php $this->endWidget(); ?>
<?php
	$eventSave = Yii::app()->createUrl( "Home/EventSave" );
	$addSchool = Yii::app()->createUrl( "Home/AddSchool&id=" );
	$addEvent = Yii::app()->createUrl( "Home/addEvent&id=" );

	$success = 'success';
	$error = 'error';

   Yii::app()->clientScript->registerScript('script_event', "


	function saveExpenses()
	{
		$.ajax({
	        type        : 'POST',
	        url         : '{$eventSave}',
	        data        : $('#season_event_form').serialize(),
	        cache       : false,
	        success     : function( data ) {
	            var json = $.parseJSON( data );

	            if(json.retVal == '{$success}')
	            {
	            	// window.location =  '{$addEvent}' + json.retMessage; 
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

	$( '.add_School' ).click(function() {
		var id = $('#SeasonEvent_season').val();
		window.location = '{$addSchool}' + id
	});


	function reloadGrid()
	{
		$('#seasons-event-grid').yiiGridView('update', {
			type:'POST',
			data: $(this).serialize()
		});
		return false;
	}

   ");
?>


</div><!-- form -->