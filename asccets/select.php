

<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
	<?php   include './link.php' ?> 
	<link rel="stylesheet" href="style.css">  	
</head>
<body>

<div class="main-div">
	<h1>Details of candidate</h1>
	<div class="center-div">		
		<div class="table-responsive">
		<table>
			<thead > 
				<tr class="border border-danger border border-4"> 
				<th class="border border-danger border border-4">id</th>
				<th class="border border-danger border border-4">name</th>
				<th class="border border-danger border border-4">username</th>
				<th class="border border-danger border border-4">password</th> 
				<th class="border border-danger border border-4">update</th> 
				<th class="border border-danger border border-4">delete</th> 
				</tr>
				
			</thead> 
			<tbody>
	<?php

	include 'dbconeect.php';

	$selectquery = " select * from users2 "; 

	$query = mysqli_query($con,$selectquery );

	while($result = mysqli_fetch_assoc($query)){ 

	?>
				<tr>
					<td class="border border-success border border-3"><?php  echo $result['id'];  ?> </td>
					<td class="border border-success border border-3"><?php  echo $result['name'];  ?> </td>
					<td class="border border-success border border-3"><?php  echo $result['username'];  ?> </td>
					<td class="border border-success border border-3"><?php  echo $result['password'];  ?> </td> 
					<!-- <td class="border border-success border border-3"></td>   -->
					<!-- <td class="border border-success border border-3"></td>   -->
					
					<td><a href="update.php?id=<?php  echo $result['id'];  ?>"> <i class="fa fa-edit"> </i> </a></td>
					<td><a href="delete.php?ids=<?php  echo $result['id'];  ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
				</tr>
	<?php 
				
		}

	?>

			</tbody>
		</table>
	</div>
</div>
</div>
</body>
</html>