<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      // $myusername = mysqli_real_escape_string($conn,$_POST['survey1']);
      $mun = $_POST['survey1'];
      //$mypassword = mysqli_real_escape_string($conn,$_POST['plot']);
      $mypass=$_POST['plot'];
      
//echo" $myusername    $mypassword";

      $sql = "SELECT * FROM survey WHERE s_no = $mun and p_no = $mypass and status NOT IN('Unauthorized','Government')";

 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);

if($count >= 1) {
      

    
      header("location: plan.php");
      }
      
      else {
         $error = "Survey or plot number is invalid ";
         header("location: invalid2.php");
      }
   }
?>