<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'announcementForm',
		'type' => 'vertical',
	)
);
?>

<div class="form">

<?php
 
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="box-body">
	<div class="row">



		<div class="col-md-3">
				<?php
					echo $form->textFieldGroup($model, 'highlight', array(
						'widgetOptions' => array(
							'htmlOptions' => array(
								'autocomplete' => 'off',
							)
						)
					));
				?>
			</div>	

		<div class="col-md-3">
        <?php echo $form->textAreaGroup($model,'description',array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'htmlOptions' => array('rows' => 5),
				)
			)
		); ?>
			</div>

		
		<div class="col-sm-3">
            <?php
            $EventList = CHtml::listData( Event::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'event_id',
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
                'cat_id',
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

        
		<div class="col-sm-3">
            <?php
            $SeasonNumber = CHtml::listData( Seasons::model()->findAll(), 'id', 'number');

            echo $form->select2Group(
                $model,
                'season_id',
                array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-8 ',
                    ),
                    'widgetOptions' => array(
                        'data' => $SeasonNumber,
                        'options' => array(
                            'placeholder' => 'Select Season',
                        ),
                    ),
                )
            );?>
        </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->