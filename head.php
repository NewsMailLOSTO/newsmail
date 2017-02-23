<!DOCTYPE html>
<?php  
    session_start();
    include 'config.php';
    include 'newskat.php';
 

?>
<html> 
<head>
<title>NewsMAIL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo $krowa;?>assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<script src="<?php echo $krowa;?>ckeditor/ckeditor.js"></script>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
