<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>India States Corona Live Stats - PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<section>
	
<div class="table-responsive">
	
<table class="table table-bordered table-striped text-center">
	<tr>
		<td class="text-capitalize"> Latest Update & Time </td>
		<td class="text-capitalize"> State </td>
		<td class="text-capitalize"> Confirmed </td>
		<td class="text-capitalize"> Active </td>
		<td class="text-capitalize"> Recovered </td>
		<td class="text-capitalize"> Deaths </td>
	</tr>


<?php

	$data = file_get_contents('https://api.covid19india.org/data.json'); // GET THE JSON DATA 

	$coronalive = json_decode($data, true); // DECODED THE JSON DATA AND MADE IT ARRAY IN PHP

$states_count = count($coronalive['statewise']); // GET THE TOTAL NO. OF DATA

//USED A WHILE LOOP TO STORE A DATA IN TABULAR FORM 

$i = 1;

while ($i < $states_count) {

	?>

	<tr>
		<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>
		<td><?php echo $coronalive['statewise'][$i]['state']; ?></td>
		<td><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
		<td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
		<td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
		<td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
	</tr>

<?php

$i++;

}


?>

</table>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>