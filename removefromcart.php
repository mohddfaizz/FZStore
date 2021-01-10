
<?php
session_start();
$q = intval($_GET['q']);

require 'config.php';

$a = $_SESSION['cust_id'];

$sql="delete from xpmp_cart where customer_id=".$a." and product_id=".$q;
if($rs=mysqli_query($conn,$sql))
{
	echo "success";
}
else
{
	echo "error";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
