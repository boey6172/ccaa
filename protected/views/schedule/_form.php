<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'scheduleForm',
		'type' => 'vertical',
	)
);
?>

<div class="form">

<?php 
	// $form=$this->beginWidget('CActiveForm', array(
	// 'id'=>'schedule-form',
	// // Please note: When you enable ajax validation, make sure the corresponding
	// // controller action is handling ajax validation correctly.
	// // There is a call to performAjaxValidation() commented in generated controller code.
	// // See class documentation of CActiveForm for details on this.
	// 'enableAjaxValidation'=>false,
	// )); 
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="box-body">
	<div class="row">

		

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
            <div class="input-append date">
			<?php
            
            $this->widget(
                'booster.widgets.TbDatePicker',
                array(
                    'model' => $model,
                    'attribute' => 'datetime_sched'
                    // 'value' => '11:15 PM',
                    // 'noAppend' => true,
                    // 'wrapperHtmlOptions' => array('class' => 'col-md-3'),
                )
            );
            ?>
			</div>

			<?php
            
            $this->widget(
                'booster.widgets.TbTimePicker',
                array(
                    'model' => $model,
                    'attribute' => 'time'
                    // 'value' => '11:15 PM',
                    // 'noAppend' => true,
                    // 'wrapperHtmlOptions' => array('class' => 'col-md-3'),
                )
            );
            ?>
				
                
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
            $SchoolList1 = CHtml::listData( School::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'school_1',
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

        <div class="col-sm-3">
            <?php
            $SchoolList2 = CHtml::listData( School::model()->findAll(), 'id', 'name');

            echo $form->select2Group(
                $model,
                'school_2',
                array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-8 ',
                    ),
                    'widgetOptions' => array(
                        'data' => $SchoolList2,
                        'options' => array(
                            'placeholder' => 'Select School',
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


       



		

	<div class="row buttons" style ="padding-left: 45px;">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div>
