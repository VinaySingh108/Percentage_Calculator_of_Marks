
<?php
$x=mysqli_connect('127.0.0.1','root','');
include_once('connection.php');
$query="Select * from marks";
$result=mysqli_query($x,$query);
?>

<!DOCTYPE html>
<html>
	<head>

	<body style='background-color:pink'>

		<title> Result </title>
	</head>
<body>

	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="7"><h2>Student Record</h2></th>
		</tr>
		<t>
			<th> RegNo </th>
			<th> StudentName </th>
			<th> OpenSource </th>
			<th> Cryptography </th>
			<th> OOPS </th>
			<th> Python </th>
			<th> Percentage </th>
		</t>
		<?php
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $rows['RegNo'];?></td>
					<td><?php echo $rows['StudentName'];?></td>
					<td><?php echo $rows['OpenSource'];?></td>
					<td><?php echo $rows['Cryptography'];?></td>
					<td><?php echo $rows['OOPS'];?></td>
					<td><?php echo $rows['Python'];?></td>
					<td><?php echo $rows['Percentage'];?></td>
				</tr>
		<?php		
			}
		?>
		</table>
</body>
</html>
