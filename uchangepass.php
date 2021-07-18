<?php
session_start();
include "database.php";
 
if(!isset( $_SESSION["ID"]))
{
	 header("location:ulogin.php");
}
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
					<h3 id="heading"> Change Password</h3>
					<div id="center">
					<?php
					if(isset($_POST["submit"]))
					{
						$sql="SELECT * from student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
							$db->query($s);
							echo "<p class='success'>Password Changed Successfully</p>";
						}
						else
						{
							echo "<p class='error'>Invalid Password</p>";
						}
					}
					?>
					     <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post" >
						     <label>Old Password</label>
							 <input type="password" name ="opass" required>
							 <label>New Password</label>
							 <input type="password" name ="npass" required>
							 <button type="submit" name="submit">Update Password</button>
						 </form>
					</div>
					
	
					</div>
					<div id="navi">
<ul>
	<li><a href="uhome.php">Home</a></li>
	<li><a href="search_book.php">Search Books</a></li>
	<li><a href="req.php">Request</a></li>
	<li><a href="uchangepass.php" class="active">Change password</a></li>
	<li><a href="logout.php">Logout</a></li>
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


