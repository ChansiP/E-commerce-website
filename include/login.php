<?php
require "common.php";
if(isset($_SESSION['email'])){
    header('location:products.php');}
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
<div class="row row_style">
<div class="col-xs-6">
<br><br><br>
<div class="panel panel-primary">
<div class="panel-heading">
<h4>Login</h4>
</div>
<div class="panel-body">
<p class="text-warning">Login to make a particular</p>
 <form action="login_submit.php" method="POST">
<div class="form-group">
 <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required></div>
<div class="form-group">
 <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required></div>
 <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
</div>

<div class="panel-footer">
                    <p>Don't have an Account? <a href="signup.php " ><mark>Register</mark></a></p>
                </div>

</div>
</div>
</div>
</div>
<?php
        include 'footer.php';
 ?>
</body>
</html>