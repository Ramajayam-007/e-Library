<?php
session_start();
include "database.php";
 
if(!isset( $_SESSION["AID"]))
{
	 header("location:alogin.php");
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
						$sql="SELECT * from admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
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
	<li><a href="ahome.php">Home</a></li>
	<li><a href="view_student.php">View Student</a></li>
	<li><a href="upload_book.php">Upload Books</a></li>
	<li><a href="view_books.php">View Books</a></li>
	<li><a href="view_req.php">View Request</a></li>
	<li><a href="view_comm.php">View comments</a></li>
	<li><a href="achangepass.php" class="active">Change password</a></li>
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


