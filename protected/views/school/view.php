<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'Update School', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete School', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>View School #<?php echo $model->id; ?></h1>
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

					<div class=" col-md-9">
						<h4>File</h4>
						<div class="input-group">
								<label class="input-group-btn">
										<span class="btn btn-primary">
												Browse&hellip; 
												<span style="display: none;">
								<?php echo $form->fileFieldGroup($model, 'logo', array()); ?>
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

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'acr',
		array(
			'type' => 'raw',
			// 'value'=>CHtml::image(Yii::app()->baseUrl."/upload/".$model->image,'alt',array("width"=>"50px" ,"height"=>"50px"))
			'value'=>CHtml::image(Yii::app()->baseUrl."/uploads/".$model->logo,'alt',array("width"=>"250px" ,"height"=>"250px")),
			),
		'address',
		
	),
)); ?>

<?php
	$save_upload_list = Yii::app()->createUrl( "school/upload" );
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
