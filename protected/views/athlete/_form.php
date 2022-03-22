	<?php
	$form = $this->beginWidget(
		'booster.widgets.TbActiveForm',
		array(
			'id' => 'athleteForm',
			'type' => 'vertical',
		)
	);
	?>

	<div class="form">



		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<!-- <?php echo $form->errorSummary($model); ?> -->


		<div class="box-body">
		<div class="row">

			<div class="col-md-4">
				<?php
					echo $form->textFieldGroup($model, 'fname', array(
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
						echo $form->textFieldGroup($model, 'mname', array(
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
						echo $form->textFieldGroup($model, 'lname', array(
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
						echo $form->textFieldGroup($model, 'suffix', array(
							'widgetOptions' => array(
								'htmlOptions' => array(
									'autocomplete' => 'off',
								)
							)
						));
					?>
			</div>

			<div class="col-sm-2">
				<?php
				$genderList = CHtml::listData( Gender::model()->findAll(), 'id', 'name');

				echo $form->select2Group(
					$model,
					'gender',
					array(
						'wrapperHtmlOptions' => array(
							'class' => 'col-sm-8 ',
						),
						'widgetOptions' => array(
							'data' => $genderList,
							'options' => array(
								'placeholder' => 'Select Gender',
							),
						),
					)
				);?>
			</div>

		
	

			<div class="col-md-2">
					<?php
						echo $form->dateFieldGroup($model, 'birthday', array(
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
						echo $form->textFieldGroup($model, 'cnum', array(
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
						echo $form->emailFieldGroup($model, 'email', array(
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
						echo $form->textFieldGroup($model, 'street', array(
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
						echo $form->textFieldGroup($model, 'barangay', array(
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
						echo $form->textFieldGroup($model, 'city_municipality', array(
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
						echo $form->textFieldGroup($model, 'province', array(
							'widgetOptions' => array(
								'htmlOptions' => array(
									'autocomplete' => 'off',
								)
							)
						));
					?>
			
			</div>
			
			<div class="col-sm-4">
				<?php
				$schoolList = CHtml::listData( School::model()->findAll(), 'id', 'name');

				echo $form->select2Group(
					$model,
					'school',
					array(
						'wrapperHtmlOptions' => array(
							'class' => 'col-sm-8 ',
						),
						'widgetOptions' => array(
							'data' => $schoolList,
							'options' => array(
								'placeholder' => 'Select School',
							),
						),
					)
				);?>
			</div>

			<div class="col-sm-4">
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

        <div class="col-sm-4">
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

			<div class="col-sm-4">
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
		

			</div>
		<div class="row buttons" style ="padding-left: 15px;">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		

		<?php $this->endWidget(); ?>
	</div>
	

