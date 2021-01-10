<?php
session_start();

$p = intval($_POST['product_id']);
$q = intval($_POST['new_quantity']);

require 'config.php';

if(isset($_SESSION['cust_id'])
{
$cusid=$_SESSION['cust_id'];
unset($_SESSION['uniq']);
}

$in="UPDATE xpmp_cart SET quantity = '$q' where product_id='$p' and customer_id= '$cusid'";
if($rs=mysqli_query($conn,$in))
{
	echo "success";
}
else
{
	echo "error";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 // you can integrate authentication module here to get logged in member


                
?>