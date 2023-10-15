
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head> 

<body style="background-color:  #cfe4d2;">  
<div class="input-card text-center">
    <svg xmlns="https://www.w3.org/2000/svg" width="50" height="55" viewBox="0 0 50 55" fill="none">
        <path d="M44.24 45.51c-1.93-.395-3.774-.833-5.31-1.14l-2.59-.571.308-2.634c0-.131.044-.263.044-.395a4.11 4.11 0 00-.308-1.623l-.614-1.405.834-1.317c.483-.79.702-1.667.702-2.677 0-1.053-.307-1.975-.878-2.765l-1.01-1.36.66-1.58a4.905 4.905 0 00.394-1.932c0-.921 0-3.686-4.345-5.354-.614-.22-1.843-.57-4.126-.702l-4.696-.308 2.239-4.081c1.8-3.248 2.809-6.189 2.809-8.252 0-1.887-.615-3.555-2.02-4.125-4.871-2.107-8.338 1.185-10.796 5.223-1.975 3.291-4.433 7.505-5.925 10.62-3.204 6.76-7.944 11.632-7.944 18.39 0 6.145 4.125 10.973 11.674 13.519 9.261 3.116 23.086 3.95 29.1 3.95 4.3 0 6.67-1.668 6.67-4.74 0-3.204-3.028-4.345-4.871-4.74z" fill="#FFD338"/>
        <path d="M42.31 42.79c-5.004-1.098-9.305-2.02-9.305-2.02.746-.526 1.536-1.623 1.536-2.984 0-1.58-.834-2.502-1.492-2.984.878-.659 2.063-1.844 2.063-3.994 0-2.326-1.58-3.511-2.414-4.082.658-.614 1.58-1.843 1.58-3.555 0-3.028-2.326-4.389-4.214-5.135-1.536-.57-4.433-.79-6.978-.79-4.17 0-7.944.307-9.744.307-2.15 0-1.887-1.097-1.097-2.107.483-.57 6.584-8.602 7.725-10.05.79-1.054 1.711-2.063 2.414-1.668.746.395.439 2.238-.351 4.257-1.186 3.16-2.853 5.18-3.248 5.881l2.809 1.712c1.097-1.36 4.652-7.286 4.652-11.104 0-1.712-.658-3.16-1.931-3.95-1.273-.746-2.897-.702-4.345.176-.966.57-1.931 1.404-2.765 2.457-2.195 2.81-6.847 8.69-8.559 10.885-2.458 3.204-1.316 7.154 3.906 7.154 1.844 0 7.857-.439 10.183-.439 2.677 0 3.994.132 4.915.263 1.756.264 2.766 1.054 2.766 2.107 0 .746-.352 1.273-.966 1.712-.615.439-1.185 1.097-1.185 2.019 0 1.097 1.01 1.536 1.668 1.975.878.57 1.404.965 1.404 1.887 0 .834-.614 1.317-1.317 1.843-.57.44-1.316.922-1.316 1.931 0 .922.658 1.361 1.097 1.712.439.351.922.746.922 1.492s-.351 1.098-1.23 1.624c-.701.395-1.71 1.142-1.71 2.195 0 1.185.833 1.711 1.842 1.975 2.414.57 9.612 2.107 12.07 2.677.79.176 1.58.439 1.58 1.097 0 .659-1.053.966-2.545.966-5.18 0-19.575-1.053-28.046-3.994-5.75-1.931-8.91-5.486-8.91-9.743 0-3.687 2.458-6.979 5.136-8.866L6.496 23.17C2.633 25.848 0 30.105 0 34.582c0 5.18 3.072 10.446 11.543 13.299 8.997 3.028 22.647 3.95 29.011 3.95 4.345 0 6.452-1.8 6.452-4.52-.044-2.59-2.15-3.995-4.697-4.521z" fill="#222"/>
        </svg>
    <h2>Welcome to Aditi Project</h2>
    <p class="small">Lorem ipsum dolor sit amet adipisicing elit. Tempore?</p> 

	
	<form action="<?php ['loginUser.php']; ?>" method="POST">  
    <input type="text" placeholder="Enter your name" class="input" name="name"> 
    <input type="text" placeholder="Enter username" class="input" name="username">
    <input type="password" placeholder="********" class="input"  name="password"> 
    <button class="btn" type="submit" name="submit">Register User</button>  
	<div class="select-user"> 
	<a href="./loginUser.php" class="list-users1">Login Now</a>  
<a href="./select.php" class="list-users">Make edit here</a> 
</div> 
</form>  
</div> 

</body> 

</html>  

<?php

include 'dbconeect.php';

if(isset($_POST['submit'])){
	$name =  mysqli_real_escape_string( $con,  $_POST['name']);
	$username =  mysqli_real_escape_string( $con,  $_POST['username']);
	$password =  mysqli_real_escape_string( $con,  $_POST['password']);
	


	$insertquery = " insert into users2(name, username, password) values('$name', '$username', '$password') ";

	$query = mysqli_query($con, $insertquery);

	if($query){
	?>
	<script>
		alert('Inserted successfull');
	</script> 

	<?php
}else{
	?>
	<script>
		alert('No Inserted ');
	</script>

	<?php
} 
} 
?>  