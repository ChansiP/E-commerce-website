 

<?php
    require 'common.php';
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET['id'];
        $user_id = $_SESSION['id'];

        $query = "INSERT INTO users_items (user_id,item_id,status) VALUES ('$user_id','$item_id','Added To Cart')";

        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

        header("location:products.php");
        
    }
?>     