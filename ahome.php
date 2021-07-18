<?php
session_start();
include "database.php";
 function countRecord($sql,$db)
 {
	 $res=$db->query($sql);
	 return $res->num_rows;
 }
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
					<h3 id="heading"> Welcome Admin</h3>
					<div id="center">
					<dl class="record">
						<dt>Total Students   </dt><dd>=> <?php echo countRecord("select * from student", $db); ?></dd>
						<dt>Total Books      </dt><dd>=> <?php echo countRecord("select * from book", $db); ?></dd>
						<dt>Total Requests   </dt><dd>=> <?php echo countRecord("select * from request", $db); ?></dd>
						<dt>Total Comments   </dt><dd>=> <?php echo countRecord("select * from comment", $db); ?></dd>
					</dl>
						</div>
					</div>
					<div id="navi">
<ul>
	<li><a href="ahome.php"class="active">Home</a></li>
	<li><a href="view_student.php">View Student</a></li>
	<li><a href="upload_book.php">Upload Books</a></li>
	<li><a href="view_books.php">View Books</a></li>
	<li><a href="view_req.php">View Request</a></li>
	<li><a href="view_comm.php">View comments</a></li>
	<li><a href="achangepass.php">Change password</a></li>
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

