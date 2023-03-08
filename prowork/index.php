<!DOCTYPE html>
<html>
<head>
	<title>Check Up Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
     <form action="login.php" method="post">
     	<h2>WORKER Check UP FORM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>


     	<label>User ID from bot</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Amount</label>
     	<input type="number" name="password" placeholder="Enter Total"><br>

     	<button type="submit">Check</button>
        
     </form>
</body>
</html>