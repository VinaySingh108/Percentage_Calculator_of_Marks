<html>
<head><title>Percentage Calculator of Marks</title></head>
<body>
<form id="form1" name="form1" method="post" action="Insert.php">
  <table width="294" heigth="172" border="1" cellpadding="10" cellspacing="10" align="center">
  	<tr>
  		<td width="123">Reg. NO.</td>
  		<td width="155"><input type="text" name="reg" id="reg" /></td>
  	</tr>
  	<tr>
  		<td>Student Name</td>
  		<td><input type="text" name="stname" id="stname" /></td>
  	</tr>
  	<tr>
  		<td>Open Source and Tech.</td>
  		<td><input type="text" name="ost" id="ost" /></td>
  	</tr>
  	<tr>
  		<td>Cryptography and Network Security</td>
  		<td><input type="text" name="crypto" id="crypto" /></td>
  	</tr>
  	<tr>
  		<td>Object Oriented Programmings</td>
  		<td><input type="text" name="oops" id="oops" /></td>
  	</tr>
  	<tr>
  		<td>Python Programming</td>
  		<td><input type="text" name="py" id="py" /></td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="submit" id="button" value="Submit"/>
  		<input type="reset" name="reset" id="reset" value="Reset"</td>
  	</tr>
  </table>  	
</form>
</body>
</html>

<?php
// define variables and set to empty values
$reg = $stname = $ost = $crypto = $oops = $py = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $reg = test_input($_POST["reg"]);
  $stname = test_input($_POST["stname"]);
  //$rn = test_input($_POST["rn"]);
  $ost = test_input($_POST["ost"]);
  $crypto = test_input($_POST["crypto"]);
  $oops = test_input($_POST["oops"]);
  $py = test_input($_POST["py"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

