<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Approval</title>
    <link rel="icon"  href="1.jpg">
    <link rel="stylesheet" type="text/css" href="st.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  </head>

  <body>
    <br><center><img src="1.jpg" height="80px" width="80px"><h2>Plan Approval</h2></center>
<div class="container">  
<div class="jumbotron">
  

  <form name="myForm" action="approve.php" method="POST">
      <h4>Plan Information</h4>

      <label>Enter SURVEY NUMBER:</label>
      <input type="number" name="survey1" class="form-control" placeholder="Survey number" required>
      <label>Enter PLOT NUMBER:</label>
      <input type="number" name="plot" class="form-control" placeholder="plot number" required>
      <label>Enter NAME:</label>
      <input type="text" name="Plan_Name" class="form-control" placeholder="Name" required>
    
    
      <label>Enter AADHAR NUMBER:</label>
      <input type="number" name="Aadhar_number" class="form-control" placeholder="Aadhar Number" required>
    
      <label>Enter Area:</label>
      <input type="number" name="Area" placeholder="Area" class="form-control" required>
      
    
      <label>Enter Construction Area:</label>
      <input type="number" name="const_area" placeholder="Construction Area" class="form-control" required>
       
      <label>Enter Height:</label>
      <input type="number" name="height" placeholder="Height" class="form-control" required>

       <label>Enter Number of Floors:</label>
      <input type="number" name="floors" placeholder="No.of.Floors" class="form-control" required>
       
    <br>
    <center><input type="submit" value="Submit Form" class="btn btn-success" name="submit" ></center>
  
      
    </form>
</div>
</div>
  </body>
</html>
