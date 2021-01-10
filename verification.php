<?php
session_start();


if(isset($_SESSION['token']))
{

require 'config.php';

	echo "<br>";
	$un = $_SESSION['username'];
	
	$sql1="select * from xpmp_token where username = '$un'";
	$rs=mysqli_query($conn,$sql1);
		
		if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_assoc($rs))
			{
				$et=$row['end_time'];	
				$tim =new DateTime();
				$tim->setTimezone(new DateTimeZone("Asia/Calcutta"));
				$nowdt = $tim->format("Y-m-d G:i:s");

				
				if($et<$nowdt)
				{
					echo "session time expired";
					unset($_SESSION['token']);
					$sql3 = "DELETE FROM xpmp_token WHERE username= '$un'";

							if (mysqli_query($conn, $sql3)) 
							{
								echo "";
							}	 
							else 
							{
								echo "Error deleting record: " . mysqli_error($conn);
							}
					exit;
				}
				else 
				{
						$sql2 = "UPDATE xpmp_customer SET status='Verified' WHERE username= '$un'";
			

						if (mysqli_query($conn, $sql2)) 
						{
							echo "Congratulations Your Account is verified successfully";
							echo "<br><a href='loginform.php'>click here</a> to login now.";
							// delete query
							$sql3 = "DELETE FROM create_token WHERE user= '$un'";

							if (mysqli_query($conn, $sql3)) 
							{
								echo "";
								unset($_SESSION['token']); 
							}	 
							else 
							{
								echo "Error deleting record: " . mysqli_error($conn);
							}
						}	 
						else 
						{
							echo "Error: " . $sql2. "<br>" . mysqli_error($conn);
						}
					}
				}
				
			}
	//connection close
	mysqli_close($conn);
}
else{
	echo "<h1 style='color:red'>page not found</h1>";
	exit;
}
?>



<html>
<head>
<style> 
body {
  margin: 30px;
  background-color: #E9E9E9;
}

</style>
</head>
<body>
<center>
<div class="verified">
<h2>Congratulations</h2>
<p>Your account is successfully activated.</p>
<p><a href="loginform.php">Click Here</a> to Login now.</p>
</div>
</center>
</body>
</html>