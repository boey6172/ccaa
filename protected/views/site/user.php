<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin-2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cbc-theme.css" />
    <link href="css/login/sb-admin.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body class="bg-dark">


<?php
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'mailFileForm',
		'type' => 'vertical',
	)
);
?>

  <div class="container">
  <div class="carousel-item">
  <img src="ball.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
  </div>


<?php $this->endWidget(); ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/CryptoJS v3.1.2/rollups/aes.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/CryptoJS v3.1.2/rollups/pbkdf2.js"></script>

    

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/granim.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/CryptoJS v3.1.2/rollups/aes.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/CryptoJS v3.1.2/rollups/pbkdf2.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-3.2.1.min.js"></script>
    


</body>
</html>
