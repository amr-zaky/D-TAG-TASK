<?php
include_once "dbh.inc.php";

if(isset($_POST['submit']))
{
	session_start();
	session_unset();
	session_destroy();
	header("location:../home.php");
}