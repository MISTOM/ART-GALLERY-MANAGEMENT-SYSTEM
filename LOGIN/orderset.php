<?php 

session_start();
if(isset($_POST['order']))
{	
	$bID=uniqid("", false);
	$oID=time();
	$odetID=uniqid("",false);
	
	
	$conn=odbc_connect("artom_art_gallery","", "");
	$sql= "INSERT into BUYER_CONTACTS (Buyer_id, Last_Name, First_Name, Email_Address, Home_Phone, Address, country) VALUES ('".$bID."','".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["email"]."','".$_POST["homephone"]."','".$_POST["address"]."','".$_POST["country"]."')";

	$sql2= "INSERT into ORDERS (ORDER_ID, BUYER_ID, ORDER_DATE, SPECIAL_REQUESTS) VALUES ('".$oID."','".$bID."','". date("l d m y") ."','".$_POST["request"]."')";

	$sql3= "INSERT into ORDER_DETAILS (ORDER_DETAILS_ID, ORDER_ID, BUYER_ID, QUANTITY) VALUES ('".$odetID."','".$oID."', '".$bID."', '".$_POST["quantity"]."')";

	echo $sql2;
	echo $sql3;

	$result=odbc_exec($conn, $sql);
	$result2=odbc_exec($conn, $sql2);
	$result3=odbc_exec($conn, $sql3);
	if ($result && $result2 && $result3) {
		echo "order done";
	}else{
		echo "there was an error";
	}

	/*echo '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>'.$_POST["firstname"].'</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td>'.$_POST["lastname"].'</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>'.$_POST["email"].'</td>
          </tr>
        </tbody>        

      </table>';*/
}else{
	echo "ERROR";
}
 
?>