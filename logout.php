<?php

session_start();

require 'config.php';

echo "You are loged out";
unset($_SESSION['cust_id']);
header("Location:loginform.php");
exit;
?>