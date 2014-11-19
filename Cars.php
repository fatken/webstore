<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php include 'include/head.php';?>

<body>
	<div class="main">
		<div>
			<?php include 'include/header.php'; ?>
		</div>

		<div class ="content">
			<p>Please select a car that you want more information on.</p>
			<?php
			error_reporting(E_PARSE);
			$handle = fopen('Docs/cars_lab5.txt','r') or die;
			$nbCar = 0;
			if($handle) {
				while (!feof($handle)) 
				{
					$buffer = fgets($handle);
					$carss = explode("|", $buffer);
					$cars_info[] = array(
					brand => $carss[0],
					price => $carss[1],
					year => $carss[2],
					picture => $carss[3],
					nation => $carss[4],
					);
					?>
					<?php
					$nbCar++;
				}
			fclose($handle);
			}
			?>

			<form action="Cars.php" method ="get">
				<select name="carIndex">
					<?php
					for($idCar=0; $idCar<$nbCar; $idCar++) { 
						?>
						<option value=<?php echo $idCar ?> >
						<?php echo $cars_info[$idCar]['brand']."--".$cars_info[$idCar]["price"]." euros"; ?> </option>
					<?php
					}	
					?>
				</select>	
				<input type="submit" value="update"/>
			</form>
			<br>

			<table>
			<?php
			if(isset($_GET["carIndex"]))
			{
			?>
				<tr>
					<th>
						<p>picture</p>
					</th>
					<th>
						<p>price</p>
					</th>
					<th>
						<p>year</p>
					</th>
					<th>
						<p>country</p>
					</th>
				</tr>

				<tr>
					<td id = "pic"><img class = "CarImg" src=<?php echo "IMG/".$cars_info[$_GET["carIndex"]]["picture"]; ?> /></td>
					<td><?php echo $cars_info[$_GET["carIndex"]]["price"]; ?> </td>
					<td><?php echo $cars_info[$_GET["carIndex"]]["year"]; ?> </td>
					<td><?php echo $cars_info[$_GET["carIndex"]]["nation"]; ?> </td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</body>
</html>