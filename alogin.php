<?php
session_start();
    include "database.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>e-Library</title>
		<link rel="icon" type="image/png" href="images/tab-icon.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		<body>
			<div id="container">
				<div id="header">
					<h1>LIBRARY</h1>
				</div>
				<div id="wrapper">
					<h3 id="heading"> Admin Login here</h3>
					<div id="center">
					<?php
					    if(isset($_POST["submit"]))
						{
							  $sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
							  $res=$db->query($sql);
							
							  if($res->num_rows>0)
							  {
								  $row=$res->fetch_assoc();
								  $_SESSION["AID"]=$row["AID"];
								    $_SESSION["ANAME"]=$row["ANAME"];
								 header("location:ahome.php");
							  }
							  else
							  {
								  echo "<p class='error'>Invalid User </p>";
							  }
							
						}
					?>
					<form action="alogin.php" method="post"> 
						<label>Name</label>
						<input class="box" type="text" name="aname"  required>
						<label>Password</label>
						<input class="box" type="password" name="apass" required>
						<button type="submit" name="submit">Login Now</button>
					</form>
					</div>
				</div>
				<div id="navi">
<ul>
	<li><a class="active" href="alogin.php">Admin Login</a></li>
	<li><a href="ulogin.php">User Login</a></li>
	<li><a href="new.php">Sign up</a></li>
</ul>	              
				</div>
				<div id="footer">
					<p>Developed by
					<i><a href="https://github.com/SanofarJahan"  target="_blank">Sanofar Jahan</a></i> and
					<i><a href="https://github.com/Ramajayam-007" target="_blank">Ramajayam M</a></i>.
					</p>
				</div>
			</div>
		</body>
	</html>

