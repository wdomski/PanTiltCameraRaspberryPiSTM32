<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tilt Raspberry Pi Camera</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<div class="login-dark" style="background-repeat:no-repeat;">

	<?php
	
	include_once 'config.php';
	
	
	if(!isset($_POST['password']) and !isset($_SESSION['ok']))
	{
	       
        include("form.php");
	}
    else{
        
        if(isset($_POST['password'])){
            if($_POST['password'] === $loginPassword){
                $_SESSION['ok'] = 1;
            }
        }
        
        if(isset($_SESSION['ok'])){
            if($_SESSION['ok'] == 1){            
                
                include("panel.php");
            }
        }

	   }
	 ?>
	 
</div>	 	           

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/data.js"></script>
</body>

</html>