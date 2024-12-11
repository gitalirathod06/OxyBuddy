<?php  
 
 session_start();


$con =mysqli_connect('localhost','root');

/*
if($con){
	echo "Connection Successful";
}
else{
	echo "Connection is not established";
}
*/
mysqli_select_db($con,'oxybuddy_data');

if(isset($_POST['login']))

{


$User = $_POST['Username'];
$Password = $_POST['psw'];

$q="select * from userinfodata where  Username='$User ' &&  Password= '$Password' ";

$result=mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if ($num==1) {

	$_SESSION['Username'] = $User;
    header('location:service.php');
}else
{
 ?>
	<script>

	 alert("Invalid user login.Please SignUp yourself first.");


	</script>
<?php
 //header('location:login.php');
}

}

?>