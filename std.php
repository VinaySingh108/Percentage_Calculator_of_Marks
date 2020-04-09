
<html>
<head>

<body style='background-color:gray'>

<script> 
function val()                                    
{ 
    var regno = document.forms["form1"]["reg"];               
    var studentname = document.forms["form1"]["stname"];    
    var opensource = document.forms["form1"]["ost"];  
    var cryptography =  document.forms["form1"]["crypto"];  
    var objectoriented = document.forms["form1"]["oops"];  
    var python = document.forms["form1"]["py"];  
   
    if (regno.value == "")                                  
    { 
        window.alert("Please enter registration number."); 
        regno.focus(); 
        return false; 
    } 
   
    if (studentname.value == "")                               
    { 
        window.alert("Please enter studentname."); 
        studentname.focus(); 
        return false; 
    } 
       
    if (opensource.value == "")                                   
    { 
        window.alert("Please enter a marks."); 
        opensource.focus(); 
        return false; 
    } 
   
    if (cryptography.value == "")                           
    { 
        window.alert("Please enter marks."); 
        cryptography.focus(); 
        return false; 
    } 
   
    if (objectoriented.value == "")                        
    { 
        window.alert("Please enter marks."); 
        objectoriented.focus(); 
        return false; 
    } 
   
    if (python.value == "")                  
    { 
        window.alert("Please enter marks."); 
        python.focus(); 
        return false; 
    } 
   
    return true; 
}</script>

<style>

val {                                         
    margin-left: 70px; 
    font-weight: bold ; 
    float: left; 
    clear: left; 
    width: 100px; 
    text-align: left; 
    margin-right: 10px; 
    font-family:sans-serif,bold, Arial, Helvetica; 
    font-size:14px; 
} 
   
div {  
    box-sizing: border-box; 
    width: 100%; 
    border: 100px solid black; 
    float: left; 
    align-content: center; 
    align-items: center; 
} 
   
form {                                         
    margin: 0 auto; 
    width: 600px; 
}</style>

<title>Percentage Calculator of Marks</title></head>

<body>
<form id="form1" name="form1" method="post" onsubmit="return val()" action="Insert.php">

 <h2 align="center" style='color:red'>Student Marks Update</h2>

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

