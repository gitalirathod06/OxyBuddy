<?php  
 
 session_start();

$con =mysqli_connect('localhost','root');

/*if($con){
	echo "connection Successful";
}
else{
	echo "Connection is not established";
}
*/

mysqli_select_db($con,'oxybuddy_data');

if(isset($_POST['submit']))
{


$HospitalName = $_POST['HName'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$User = $_POST['Username'];
$Password = $_POST['psw'];

$q="select * from userinfodata where Username='$User' ||  Password ='$Password' || Email='$Email'" ;

$result=mysqli_query($con,$q);

$num = mysqli_num_rows($result);

 if ($num==1) {

          ?>
          <script>
          alert("Duplicate data") ;
            </script>
    
            <?php
        }
        elseif (!preg_match("/^([a-zA-Z])([a-zA-Z\s]{2,20})$/", $HospitalName)) {
          ?>
          <script>
          alert("Length of hospital name is atleast 3 and it should consist of only  alphabets") ;
            </script>
    
            <?php
        }
        elseif (!preg_match("/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})$/", $Email)) {
          ?>
          <script>
          alert("Invalid email.Email format must be eg. example@gmail.com") ;
            </script>
    
            <?php
    
        }
        elseif(!preg_match("/^[6-9]\d{9}$/", $Mobile)){
          ?>
          <script>
          alert("Invaild mobile number") ;
            </script>
    
            <?php

        }

        elseif (!preg_match("/^[a-zA-Z]{3,20}$/",$User )) {
        	?>
            <script>
            alert("Length of Username is atleast 3 and it should consist of only alphabets") ;
            </script>

         <?php
        }
        elseif (!preg_match("/^[a-zA-Z0-9]{4,10}$/",$Password )) {
          ?>
          <script>
          alert("Length of Password is atleast 4") ;
            </script>
    
            <?php
        }
        else{
                $query = "insert into userinfodata(	Hospital_Name,Email,Mobile_Number,Username,Password ) values ('$HospitalName','$Email','$Mobile','$User','$Password')";

            mysqli_query ($con,$query);
            
              ?>
              <script>
               alert("Registration Successful") ;
              </script>
         
         <?php
            }
   
}

?>