
<?php
session_start();


if(isset($_SESSION['token']))
{

require 'config.php';

	echo "<br>";
	$un = $_SESSION['username'];
	
	$sql1="select * from create_token where user= '$un'";
	$rs=mysqli_query($conn,$sql1);
		
		if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_assoc($rs))
			{
				$et=$row['end_time'];
				//$gg=strtotime($et);
				//$gg= date("Y/m/d G:i:s",$gg);
				
				
				$tim =new DateTime();
				$tim->setTimezone(new DateTimeZone("Asia/Calcutta"));
				$nowdt = $tim->format("Y-m-d G:i:s");
				echo $et."<br>";
				echo $nowdt."<br>";
			//	echo 'ddd'.($gg > $nowd);
				
				if($et<$nowdt)
				{
					echo "session time expired";
					unset($_SESSION['token']);
					$sql3 = "DELETE FROM create_token WHERE user= '$un'";

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

					if(isset($_POST['reset']))
					{
		
						$b=$_POST['uname'];
						$c=$_POST['confirmpsw'];
						$d=md5($c);
						$sql2 = "UPDATE logindetails SET password='$d' WHERE username= '$b'";
			

						if (mysqli_query($conn, $sql2)) 
						{
							echo "Congratulations Your password is changed successfully";
							echo "<br><a href='loginform.php'>click here to login now</a>";
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
<title>Reset Password</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .resetbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .resetbtn {
     width: 100%;
  }
}
</style>

<body>
<center>
<div style="width:30%;margin-top:100px;"> 
<form action="" method="post">
<div class="container" style="background-color:#191919;color:#a8a8a8;padding-bottom:100px;">
  <h1 style="color:#fff; font-weight: 500">Reset Password</h1>
	
	<label for="uname" style="float:left;"><i class="fas fa-user"></i><b>  Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" value="<?php echo $un; ?>" required>
	<br><br>
    <label for="psw" style="float:left;"><i class="fas fa-key"></i><b>  Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	<br><br>
    <label for="confirmpsw" style="float:left;"><i class="fas fa-key"></i><b>  Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpsw" required>
    <br><br>
    
   
    <button type="reset" class="cancelbtn" style="float:left;">Cancel</button>
    <button type="submit" class="resetbtn" name="reset" style="float:right;">Reset</button>
	 
</form>
</div>
</body>
</html>