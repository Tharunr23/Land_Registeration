<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $mun = $_POST['survey1'];
      //$mypassword = mysqli_real_escape_string($conn,$_POST['plot']);
      $mypass=$_POST['plot'];
      $name=$_POST['Plan_Name'];
      $adhar=$_POST['Aadhar_number'];
      $area=$_POST['Area'];
      $heigh=$_POST['height'];
      $floor=$_POST['floors'];
      
//echo" $myusername    $mypassword";

      $sql = "SELECT * FROM survey WHERE s_no = $mun and p_no = $mypass and height >= $heigh ";

 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);

if($count >= 1) {
      
      $sql= "INSERT INTO plan VALUES ('$mun','$mypass','$name','$adhar','$area','$heigh','$floor') ";
        $result = mysqli_query($conn,$sql); 
      header("location: psuccess.php");
      }
      
      else {
         $error = " Height requested is beyond approval ";
         header("location: inval.php");
      }
   }
?>