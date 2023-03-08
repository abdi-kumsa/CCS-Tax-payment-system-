<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>
<h1> <?php echo $_SESSION['name']; ?>'s total is the same please proceed to the next work</h1>
	

</body>
</html>
     
     <nav class="home-nav">
  
        <a href="logout.php"><h4>Logout</h4></a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>