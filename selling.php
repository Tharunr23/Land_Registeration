<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Login</title>
    <link rel="icon"  href="1.jpg">

    <link rel="stylesheet" type="text/css" href="st.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
  </head>

  <body>
    <br><center><img src="1.jpg" width="80px" height="80px"><h2>Property Registration Form</h2></center>
<div class="container">  
<div class="jumbotron">
  

  <form name="myForm" action="rsucess.php"  method="POST">
      <h4>Seller Information:</h4>
      <label>Enter NAME:</label>
      <input type="text" name="Seller_Name" class="form-control" placeholder="Name" required>
    
    
      <label>Enter AADHAR NUMBER:</label>
      <input type="text" name="Aadhar_number" class="form-control" placeholder="Aadhar Number" required>
    
      <h4>Buyer Information:</h4>
      <label>Enter NAME:</label>
      <input type="text" name="Buyer_Name" placeholder="Name" class="form-control" required>
      
    
      <label>Enter AADHAR NUMBER:</label>
      <input type="number" name="Aadhar_Number" placeholder="Aadhar Number" class="form-control" required>
       <h4>Witness 1 Information:</h4>
      <label>Enter NAME:</label>
      <input type="text" name="Witness1_Name" placeholder="Name" class="form-control" required>

       <label>Enter AADHAR NUMBER:</label>
      <input type="number" name="Aadhar_Number" placeholder="Aadhar Number" class="form-control" required>
       <h4>Witness 2 Information:</h4>
       <label>Enter NAME:</label>
      <input type="text" name="Witess2_Name" placeholder="Name" class="form-control" required>

       <label>Enter AADHAR NUMBER:</label>
      <input type="number" name="Aadhar_Number" placeholder="Aadhar Number" class="form-control" required>


    
    <br>
    <center><input type="submit" value="Submit Form" class="btn btn-success" name="submit"></center>
  
      
    </form>
</div>
</div>
  </body>
</html>

