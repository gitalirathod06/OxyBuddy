<?php  
 
 session_start();


$con =mysqli_connect('localhost','root');

/*if($con){
	echo "Connection Successful";
}
else{
	echo "Connection is not established";
}*/


mysqli_select_db($con,'oxybuddy_data');


if(isset($_POST['order']))
{

$LoginUser = $_SESSION['Username'];
$HosName = $_POST['hname'];
$Patient = $_POST['patient'];
$requirement = $_POST['cylinder'];
$date = $_POST['date'];
$Address = $_POST['address'];



$n=$_SESSION['Total'];

function stock(int $a){
  global $n;

  if($n>=$a)
  {
    
    $n=$n - $a;
    return ($n);
   
}
else
{
  return -1;
}

}
$result=stock($requirement);
 echo "new n is $n";

$_SESSION['Total']=$n;







if (!preg_match("/^([a-zA-Z])([a-zA-Z\s]{2,20})$/", $HosName)) {
          ?>
          <script>
          alert("Length of hospital name is atleast 3 and it should consist of only alphabets") ;
            </script>

           <?php
           }

elseif (!preg_match("/^([a-zA-Z])([a-zA-Z\s]{3,20})$/", $Patient)) {
          ?>
          <script>
          alert("Length of patient name is atleast 3 and it should consist of only alphabets") ;
            </script>

            <?php
            }
elseif (!preg_match("/^[0-5]$/", $requirement)) {
          ?>
          <script>
          alert("We can provide maximum 5 oxygen cylinder  per patient") ;
            </script>
          <?php
      }


elseif (!preg_match("/^((2021)\-(0[1-9]|1[0-2])\-(0[1-9]|[1-2][0-9]|3[0-1]))$/", $date)) {
          ?>
          <script>
          alert("Invalid date.Date format should be eg. yyyy-mm-dd") ;
            </script>

          <?php
          

          }
elseif (!preg_match("/^([a-zA-Z0-9])([a-zA-Z0-9\s,-.])+$/", $Address)) {
          ?>
          <script>
          alert("Invalid address") ;
          </script>          

          <?php
           }



else { 
global $result;

  if($result<0){

           ?>
          <script>
          alert("Out of Stock") ;
          </script>          

          <?php
}


else
{

  if($result>=0){
           ?>
          <script>
          alert("Stock is available") ;
          </script>          

          <?php





$query = "insert into orderdata(Login_username,	Hos_Name,Patient_Name,Oxy_Cylinder,Date,Address ) values ('$LoginUser','$HosName','$Patient','$requirement','$date','$Address')";


mysqli_query ($con,$query);
?>
          <script>
          alert("data store successful") ;
          </script>
 

<?php
header('location:payment.php');

}
}
}
}

?>