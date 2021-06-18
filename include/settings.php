<?php
require 'common.php';
if (!isset($_SESSION['email'])){
header("location:index.php");
}
?>
<!DOCTYPE html> 
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="..\include/bootstrap1.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container">
<div class="row" >
<div class="col-xs-4">
<br><br><br>
<form action="Settings_script.php" method="POST" >
<label><h4><b>ChangePassword</h4></label>
<div class="form-group">
<input type="password" name="oldpassword" placeholder="Old Password" class="form-control">
</div>
<div class="form-group">
<input type="password" name="newpassword" placeholder="New Password" class="form-control"></div>
<div class="form-group">
<input type="password" name="retypepassword" placeholder="Re Type New Password" class="form-control"></div>
 <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
<div class="form-group">
<button class="btn btn-primary" >Change</button>
</div>
</form>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>