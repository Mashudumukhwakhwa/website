
<?php
	include 'database.php';
?>

<html>
	<head>
		<title>vw garage</title>
		<body>
			
		<?php

		$query="SELECT*FROM car";
		$retrieve_vw =mysqli_query($connection , $query);
			if(!$retrieve_vw){
				die("error occured".mysql_error($connection));
			}


		?>

		<table border="10">
			<thead>
			<tr>
				<th>car_id></th>
				<th>car_image</th>
				<th>model</th>
				<th>engine_number</th>
				<th>color</th>
				<th>car_condition</th>
				<th>kilos_used</th>
				<th>Gearbox</th>
				<th>car_seats</th>
				<th>car_size</th>
				<th>fuel_type</th>
				<th>price</th>
			</tr>
		</thead>
		<tbody>
			
<?php

	while($row=mysqli_fetch_array($retrieve_vw)){
		$car_id  =$row['car_id'];
		$car_image=$row['car_image'];
		$model =$row['model'];
		$engine_number=$row['engine_number'];
		$color=$row['color'];
		$car_condition=$row['car_condition'];
		$kilos_used=$row['kilos_used'];
		$Gearbox=$row['Gearbox'];
		$car_seats=$row['car_seats'];
		$car_size=$row['car_size'];
		$fuel_type=$row['fuel_type'];
		$price=$row['price'];

	?>
	<tr>
		<td><?php echo $car_id; ?></td>
		<td><img src="images/<?php echo $car_image;?>"></td>
		<td><?php echo $model;?></td>
		<td><?php echo $engine_number?></td>
		<td><?php echo $color?></td>
		<td><?php echo $car_condition?></td>
		<td><?php echo $kilos_used?></td>
		<td><?php echo $Gearbox?></td>
		<td><?php echo $car_seats?></td>
		<td><?php echo $car_size?></td>
		<td><?php echo $fuel_type?></td>
		<td><?php echo $price?></td>
		<?php } ?>
	</tr>

		</tbody>
	

	

		










		</body>
	</head>
</html>