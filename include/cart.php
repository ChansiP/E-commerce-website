

<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="..\include/bootstrap1.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   
</head>
<body>
    <!-- Header -->
    <?php
        require 'header.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
        <div class="container">        
        
        
            <br>
            <br>
            <br>
        </form>
        <table class="table table-striped table-responsive">
        <?php
        if(isset($_GET['m1'])){
            $disc=$_GET['m1'];
        }
        $sum = 0;
        $user_id = $_SESSION['id'];
        $query = "SELECT items.price AS price, items.id, items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'";
        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='Cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>