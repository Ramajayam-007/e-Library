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
					<h3 id="heading"> New Book Request</h3>
					<div id="center">
					<?php
					if(isset($_POST["submit"]))
					{
						$sql=" insert into request(ID,MESS,LOGS) values({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
							$db->query($sql);
							echo "<p class='success'>Request Sent</p>";
						
					}
					?>
					     <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post" >
						    
							 <label>Message</label>
							 <textarea required name="mess"></textarea>
							
							 <button type="submit" name="submit">Send Request</button>
						 </form>
					</div>
					
	
					</div>
					<div id="navi">
<ul>
	<li><a href="uhome.php">Home</a></li>
	<li><a href="search_book.php">Search Books</a></li>
	<li><a href="req.php"class="active">Request</a></li>
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


