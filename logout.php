<?php
session_start();
unset($_SESSION["AID"]);
unset($_SESSION["ID"]);
session_destroy();
 header("location:index.php");
?>