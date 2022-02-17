<?php 

include('connection.php');
include('functions.php');
 $query = "select * from games";
 $res = mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GAMES</title>
<style>
body{

}
#tab {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}
#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
 <table id= "tab" align="center" border="1px" style="width: 1050px; line-height: 70px;">
		<tr>
			<th colspan="10" align="center"><h2>Bill Details</h2></th>
		</tr>
		<t>
			<th>Name</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Developers</th>
		</t>
		<?php
		while($rows=mysqli_fetch_assoc($res))
		{
		?>
			<tr>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['genre'];?></td>
				<td><?php echo $rows['rating'];?></td>
				<td><?php echo $rows['developers'];?></td>
			</tr>
			<?php 
		}
		?>

		
	</table>
</body>
</html>
