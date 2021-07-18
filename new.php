<?php

include "database.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>e-Library</title>
		<link rel="icon" type="image/png" href="images/tab-icon.png">
		<link rel="stylesheet"
		      type="text/css"
		      href="css/style.css">
	</head>
		<body>
			<div id="container">
				<div id="header">
					<h1>LIBRARY</h1>
				</div>
				<div id="wrapper">
					<h3 id="heading"> New User Registration</h3>
					<div id="center">
					<?php
					if(isset($_POST["submit"]))
					{
					
							$sql="insert into student(NAME,PASS,MAIL,DEP) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
							$db->query($sql);
							echo "<p class='success'>Registered</p>";
						
						
					}
					?>
					     <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post" >
						     <label>Name</label>
							 <input type="text" name ="name" required>
							 <label>Password</label>
							 <input type="password" name="pass" required>
							 <label> Email ID</label>
							 <input type="email" name="mail" required>
							 <select name="dep">
							     <option value="">Department</option>
							     <option value="EEE">EEE</option>
								 <option value="ECE">ECE</option>
								 <option value="CSE">CSE</option>
								 <option value="CSE">MECH</option>
								 <option value="OTHERS">Others</option>
								 
							</select>
							 <button type="submit" name="submit">Register Now</button>
						 </form>
					</div>
					
	
					</div>
					<div id="navi">
<ul>
	<li><a href="alogin.php">Admin Login</a></li>
	<li><a href="ulogin.php" >User Login</a></li>
	<li><a href="new.php" class="active">Sign up</a></li>
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


