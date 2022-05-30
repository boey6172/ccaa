<?php
/* @var $this AthleteController */
/* @var $model Athlete */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Athlete', 'url'=>array('index')),
	array('label'=>'Create Athlete', 'url'=>array('create')),
	array('label'=>'Update Athlete', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Athlete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Athlete', 'url'=>array('admin')),
);
?>

<h1>View Athlete #<?php echo $model->getFullName(); ?></h1>
<h1> Upload file </h1>

<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'mailFileForm',
		'type' => 'vertical',
	)
);
?>
				<div id="alert_errors"></div>
				<div class="row">
				<div class="col-sm-5">
						<?php
						$SeasonNumber = CHtml::listData( Filetype::model()->findAll(), 'id', 'name');

						echo $form->select2Group(
							$model,
							'type',
							array(
								'wrapperHtmlOptions' => array(
									'class' => 'col-sm-8 ',
								),
								'widgetOptions' => array(
									'data' => $SeasonNumber,
									'options' => array(
										'placeholder' => 'Select File Type',
									),
								),
							)
						);?>
					</div>
					<div class=" col-md-9">
						<h4>File</h4>
						<div class="input-group">
								<label class="input-group-btn">
										<span class="btn btn-primary">
												Browse&hellip; 
												<span style="display: none;">
								<?php echo $form->fileFieldGroup($model, 'psa', array()); ?>
								<?php echo $form->hiddenField($model, 'id', array()); ?>
								<!-- <?php echo $form->hiddenField($model, 'id', array()); ?> -->

							</span>
										</span>
								</label>
								<input type="text" class="form-control file" readonly>
						</div>
					<a href="#" class="btn btn-primary btn-mds" id="save_mail_list_file_btn"><span class="btn_icon fa fa-save"></span> SAVE</a>
					</div>
				</div>

</br>
<?php $this->endWidget(); ?>
<?php $path ='http://localhost/ccaa/uploads/'; ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			// 'id',
			'fname',
			'mname',
			'lname',
			'suffix',
			'birthday',
			'email',
			'cnum',
			'street',
			'barangay',
			'city_municipality',
			'province',
			// 'psa',
			array('label'=>'psa',
			'type'=>'raw',
      'value'=>CHtml::link(CHtml::encode($model->psa), "http://localhost/ccaa/uploads/".$model->psa, array("class"=>"btn btn-info",))),
			array('label'=>'coe',
			'type'=>'raw',
      'value'=>CHtml::link(CHtml::encode('Click Here'), "http://localhost/ccaa/uploads/".$model->coe, array("class"=>"btn btn-info",))),
			array('label'=>'waiver',
			'type'=>'raw',
      'value'=>CHtml::link(CHtml::encode('Click Here'), "http://localhost/ccaa/uploads/".$model->waiver, array("class"=>"btn btn-info",))),
			array('label'=>'cog',
			'type'=>'raw',
      'value'=>CHtml::link(CHtml::encode('Click Here'), "http://localhost/ccaa/uploads/".$model->cog, array("class"=>"btn btn-info",))),
			array('label'=>'medical',
			'type'=>'raw',
      'value'=>CHtml::link(CHtml::encode('Click Here'), "http://localhost/ccaa/uploads/".$model->medical, array("class"=>"btn btn-info",))),
			array(
				'name'=>'gender',
				'value'=>$model->Gender->name,
			),
			
			array(
				'name'=>'school',
				'value'=>$model->School->name,
			),
			array(
				'name'=>'Season',
				'value'=>$model->Seasons->number,
			),
			
			
		),
	)); ?>

	<?php
	$save_upload_list = Yii::app()->createUrl( "athlete/upload" );
	$success = 'success';
	$error = 'error';

   Yii::app()->clientScript->registerScript('upload_mail_scripts', "

   	function uploadFile()
    {
		$('.btn').addClass('disabled');
		$('.btn_icon').removeClass('fa-save');
		$('.btn_icon').addClass('fa-spinner fa-pulse fa-spin');

        data = new FormData($('#mailFileForm')[0]);

        $.ajax({
            type        : 'POST', 
            url         : '{$save_upload_list}',
            data        : data,
            processData: false,
            contentType: false,
            cache       : false,
            success     : function( data ) {
                var json = $.parseJSON( data );

                $('.btn').removeClass('disabled');
                $('.btn_icon').addClass('fa-save');Athlete_file
				$('.btn_icon').removeClass('fa-spinner fa-pulse fa-spin');

                if(json.retVal == '{$success}')
                {
                	reset_form();
                    $('#alert_errors').html(json.retMessage);

                    setTimeout(function() { 
                      $('#alert_box').alert('close');
                    }, 1000);
                }
                else if(json.retVal == '{$error}')
                {
                    $('#alert_errors').html(json.retMessage);
                }
            }
        })
    }

    function reset_form()
    {
    	$('.file').val('');
    	$('#Athlete_file').val('');
    }
    
    $(document).on('click', '#save_mail_list_file_btn', function(){
    	uploadFile()
			
    });

   ");
?>

	<script type="text/javascript">
	$(function() {

	  // We can attach the `fileselect` event to all file inputs on the page
	  $(document).on('change', ':file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	    input.trigger('fileselect', [numFiles, label]);
	  });

	  // We can watch for our custom `fileselect` event like this
	  $(document).ready( function() {
	      $(':file').on('fileselect', function(event, numFiles, label) {

	          var input = $(this).parents('.input-group').find(':text'),
	              log = numFiles > 1 ? numFiles + ' files selected' : label;

	          if( input.length ) {
	              input.val(log);
	          } else {
	              if( log ) alert(log);
	          }

	      });
	  });
	  
	});
</script>