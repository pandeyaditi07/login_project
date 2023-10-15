<?php

include 'dbconeect.php';

$id = $_GET['ids']; 

$deletequery = "delete from users2 where id=$id"; 

$query = mysqli_query($con, $deletequery);

if($query){
	?>
	<script>
		alert('deleted successfull');
	</script>

	<?php
	header('location:select.php'); 
}else{
	?>
	<script>
		alert('Not deleted ');
	</script>

	<?php
}


?>