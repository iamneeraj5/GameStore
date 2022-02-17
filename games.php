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
.button {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 50%;
}
.button1 {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 100px;

}

.cent{
	display: flex;
  justify-content: center;
  align-items: center;
}
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
 <table id= "tab" align="center" border="1px" style="width: 1000px; line-height: 70px;">
		<tr>
			<th colspan="100" align="center"><h2>Game Details</h2></th>
		</tr>
		<t>
			<th>Name</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Developers</th>
			<th>Price</th>
			<th>Buy Now</th>
		</t>
		<?php
		while($rows=mysqli_fetch_assoc($res))
		{
		?>
			<tr>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['genre'];?></td>
				<td><?php echo $rows['rating'];?></td>
				<td><?php echo $rows['Developers'];?></td>
				<td><?php echo $rows['Price'];?></td>
				<td><a href="#" class="button">BUY</a></td>
			</tr>
			<?php 
		}
		?>

		
	</table>
	<div class="cent">
	<a href="index.php" class="button1">Back</a>
</div>
</body>
</html>
