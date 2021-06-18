

<?php
function check_if_added_to_cart($item_id){
   $user_id = $_SESSION['id'];
require 'common.php';
$select_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='Added to cart'"
;
  $mysqli_result= mysqli_query($conn, $select_query);
  
if (mysqli_num_rows($mysqli_result)>=1){
return TRUE;
}
else
{
return FALSE;
}}
?>