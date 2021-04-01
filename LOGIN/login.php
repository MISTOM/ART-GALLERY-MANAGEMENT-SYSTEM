<?php
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$password=$_POST['passcode'];
	$conn=odbc_connect("artom_art_gallery","", "");
	$sql="select * from LOGIN_TABLE where USERNAME='".$uname."'and PASSWORD='".$password."'";
	$result=odbc_exec($conn, $sql);
	$count=odbc_fetch_row($result);
	if ($count==1)
	{
		echo "login success";
		$_SESSION['LOG']=1;
		header("refresh:2; url=artistpage.php");

	}
	elseif ($count==null) 
	{
		echo "try again";
		header("refresh:2; url=loginpage.php");
	}

}
else{

	echo "invalid Request";
	header("refresh:2; url=../HOMEPAGE/index.html");

};

?>