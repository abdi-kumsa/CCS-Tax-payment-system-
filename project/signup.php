<!DOCTYPE html>
<html>
<head>
	<title>Submission Area</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <form action="signup-check.php" method="post">

     	<h2 text-align="center"   >Submission Area</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
<br>
          <label>An ID given to you by the bot</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      maxlength="6"
                      placeholder="ID"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname"
                      maxlength="6" 
                      placeholder="ID"><br>
          <?php }?>
<br>

     	<label>Copy total</label>
     	<input type="password" 
                 name="password" 
                 placeholder="copy"><br>
<br>
          <label>copy total again</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_copy"><br>
<br>
     	<button type="submit">Submit</button>
      <a href="submission.php"> << Back</a>
          
     </form>
</body>
</html>

     
      
    

    
