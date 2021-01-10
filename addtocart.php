
<?php
session_start();
$q = intval($_GET['q']);

require 'config.php';

$a = $_SESSION['cust_id'];


$sql="INSERT INTO xpmp_cart(customer_id,product_id,quantity) VALUES('$a','$q','1')";
$rs=mysqli_query($conn,$sql);


mysqli_close($conn);
?>
