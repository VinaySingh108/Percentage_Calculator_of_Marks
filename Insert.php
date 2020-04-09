<?php
	
	$con = mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo 'Not Connected To Server';
	}

	if(!mysqli_select_db($con,'calculator'))
	{
		echo 'Database Not Selected';
	}

	$RegNo = $_POST['reg'];
	$StudentName = $_POST['stname'];
	$OpenSource = $_POST['ost'];
	$Cryptography = $_POST['crypto'];
	$OOPS = $_POST['oops'];
	$Python = $_POST['py'];
    $sum = ($OpenSource+$Cryptography+$OOPS+$Python);
    $Percentage = ($sum/400)*100;
	$sql = "INSERT INTO marks (RegNO,StudentName,OpenSource,Cryptography,OOPS,Python,Percentage) VALUES ('$RegNo','$StudentName','$OpenSource','$Cryptography','$OOPS','$Python','$Percentage')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("refresh:1; url=std.php");

	echo "<script>alert('YOUR PERCENTAGE IS $Percentage')</script>"


?>
