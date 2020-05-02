   <!-- if(isset($_POST['login-btn'])) {
  var_dump($_POST);
    die();                    
 } -->



<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project-1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2cb83bbf20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- custom stylesheet file -->
    <link rel="stylesheet" href="../project-1/assets/style.css">
</head>
<body>

   <!-- navbar-start -->
   <?php include("app/includes/header.php");?>
          <!-- Todo - header file-  -->

      <!-- navbar--end -->
      <div class="container-fluid head">
       
      
      <br> 
      <div class="auth-content">
        <form action="login.php" method="post">
        <h2 class="form-title">
        Login</h2>
   

        <div>
        <label>Username</label>
        <input type="text" name="username" id="username" class="text-input">
        </div>
       
        <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
        </div>
        
        <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button></div>
        <p>Or <a class="in" href="<?php echo BASE_URL . '/register.php' ?>">Sign Up </a></p>

        </form>
        </div>
      </div>
      
           <!-- End -->




 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script src="../project-1/assets/main.js"></script>
</body>
</html>