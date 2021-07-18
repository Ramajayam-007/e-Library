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
					<h3 id="heading"> Welcome <?php echo $_SESSION["NAME"];?></h3>
					<div id="center">
					
				    </div>
				</div>
					<div id="navi">
<ul>
	<li><a href="uhome.php" class="active">Home</a></li>
	<li><a href="search_book.php">Search Books</a></li>
	<li><a href="req.php">Request</a></li>
	<li><a href="uchangepass.php">Change password</a></li>
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

