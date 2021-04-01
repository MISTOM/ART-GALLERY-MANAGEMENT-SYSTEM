<?php
session_start();
if(isset($_POST['register']))
{	
	$id=uniqid("", false);
	$id2=time();

	$conn=odbc_connect("artom_art_gallery","", "");
	$sql= "INSERT into ARTIST (ARTIST_ID, ARTIST_FIRST_NAME, ARTIST_LAST_NAME, ARTIST_CONTACT, EMAIL_ADDRESS, USERNAME) VALUES ('".$id."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["contact"]."','".$_POST["email"]."','".$_POST["uname"]."')";

	$sql2= "INSERT into LOGIN_TABLE (LOGIN_ID,USERNAME, PASSWORD) VALUES ('".$id2."', '".$_POST["uname"]."', '".$_POST["pword"]."')";

	$result=odbc_exec($conn, $sql);
	$result2=odbc_exec($conn, $sql2);

	if ($result && $result2)
	{
		echo "Registration success";
		$_SESSION['LOG']=1;
		header("refresh:1; url=artistpage.php");

	}
	else{
		echo "error";
		//header("refresh:1; url=register_form.php");
	}	
}else {echo "error";}

?>