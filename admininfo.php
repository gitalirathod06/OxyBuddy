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

if(isset($_POST['submit']))

{


$Total = $_POST['Total'];

if(!preg_match("/^[0-9]{1,3}$/", $Total)){
	?>

          <script>
          alert("invalid entry") ;
            </script>
          <?php

      }



  else 

  {

  	$_SESSION['Total']=$Total;


  	$q= "insert into admininfo (Total_cylinder_present_at_OxyBuddy) value ('$Total')";
  	mysqli_query ($con,$q);
            
              ?>
              <script>
               alert("Data enter Successfully") ;
              </script>
         
         <?php
            }
  }








?>