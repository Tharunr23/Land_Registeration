<html>
<head>
  <title>Login</title>
  <link rel="icon"  href="1.jpg">

  	<style>
        body {
  background-image: url("bg2.jpg");
}
    .ct {
			position: fixed;
			top: 10%;
			right: 41%;
			font-family: "The Times New Roman", Times, serif;
			font-size: 40px;
		}
        input[type="text"],input[type="password"]
        {
            height:3vw;
            width:17vw;
            background-color:rgba(0,0,0,0.7);
            border:transparent;
            border-radius:1vw;
            text-align:center;
        }
        input[type="submit"],input[type="reset"]
        {
            width:11vw;
            height:2.5vw;
            background-color:#2069b4;
            border-radius:1.5vw;
            transition:background-color 0.5s,border-radius 0.6s;
            border:transparent;
        }
        input[type="submit"]:hover,input[type="reset"]:hover
        {
            background-color:#7a297a;
            border-radius:1vw;
        }
		</style> 
<h1 class="ct"> Citizen Login</h1>

</head>
<body>
<table  cellpadding="0" cellspacing="0" height="100%" width="100%" ;">
        <tr><td width="100%" >
        <br>    <br>    <br>
	<form  name="frm_mislogin" method="post" action="apply3.php" >
    <table style="border: 1px dotted rgba(160,0,0,1.0); color:#666666;" align="center" border="1" width="85%" height="55%" cellpadding="3" cellspacing="0" >
      <tbody></tbody>
    <tr>
  	  	<td width="41%"><center><img src="l.png" width="200px"  height="200px" /></center></td>
        <td align="center" valign="top" >
		<table style="color:#2C4365;"" border="0" cellpadding="7" cellspacing="0" width="90%">
          <tbody>
		   <tr>
            <td align="right" >&nbsp; </td>
            <td >&nbsp;</td>
          </tr>
		   <tr>
            <td align="right" >&nbsp; </td>
            <td >&nbsp;</td>
          </tr>
		  <tr>
			<td align="center" colspan="2" ><b style="color:#FF0000" ></b></td>
		  </tr>		
		  <tr style="padding-right: 100px;">
            <td align="right" width="35%" style="color:#dbce18;font-family:Encode Sans Condensed;"><b>Survey Number :</b> </td>
            <td style="padding-right: 100px;" width="50%"><input  name="survey1" size="30"  type="text" placeholder="SURVEY NUMBER"></td>
          </tr>
          <tr>
            <td align="right" style="color:#dbce18;font-family:Encode Sans Condensed;"><b>Plot Number : </b></td>
            <td><input  name="plot" size="30" type="text" placeholder="PLOT NO."></td>
          </tr>
          <tr>
            <td colspan="2" align="center"  style="padding-left:11.8vw;">
				<input value="  Login  " type="submit"  ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input value="  Clear  " type="reset" ></td>
          </tr>
        </tbody></table>
		</td>
      </tr>
    </tbody></table>
	</form>
    <br>
    <br>
<br>
</td></tr></table>
</body></html>