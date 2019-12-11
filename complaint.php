<!DOCTYPE html>
<html>
<head>
	<title>Complaint</title>
	<link rel="icon"  href="1.jpg">
</head>
<body>
	<p align="center" style="font-size: 300%;" >Complaint Form </p>
	
	<form action="csuccess.php" method="POST"   >
		<img src="5.jpg" 
	style=" float: left;
	width: 350px;
	height: 500px;
	padding-left: 100px;">
	<br><br><br><br><br><div align="center" style="padding-right: 450px;">
	Name:<input  type="text" name="name"><br><br><br>
	Email:<input type="email" name="email"><br><br><br>
	Complaint Box:<br><br><textarea rows="10" cols="50" value="Write your Complaint"></textarea><br><br><br>
	<input type="submit" name="submit" value="Submit" class="four">
</div>

	</form>
	<style type="text/css">
		.four {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer; 
}

	</style>
</body>
</html>