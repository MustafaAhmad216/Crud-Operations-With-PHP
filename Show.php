<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>

	<h3> Read the data from a file again</h3>

	<table>

		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>User Name</th>
			<th>Country</th>
            <th>Gender</th>
			<th>Department</th>
			
		</tr>

		<?php
		$json_data = file_get_contents("messages.json");
		$dataa = json_decode($json_data, true);
		if (count($dataa) != 0) {

			foreach ($dataa as $dd) {
		?>
				<tr>
					<td>
					<?php echo $dd['firstName'] ?>
					</td>
					<td>
					<?php echo $dd['lastName'] ?>
					</td>
					<td>
					<?php echo $dd['UserName'] ?>
					</td>
					<td>
					<?php echo $dd['country'] ?>
					</td>
					<td>
					<?php echo $dd['gender'] ?>
					</td>
					<td>
					<?php echo $dd['Department'] ?>
					</td>
				</tr>
		<?php

			}
		}

		?>

	</table>
</body>
</html>

<style>

table{
    border-collapse: collapse;
}
td , th{
border-radius: 12px;
border: solid black;
}
</style>

