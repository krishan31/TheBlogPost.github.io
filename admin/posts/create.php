<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addd  post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2cb83bbf20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- custom stylesheet file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-dark navbar-inverse p-2 ring">
        <a class="navbar-brand" href="#"><span class="logo">BLOG</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
              <div class="search-bar">
                  <i class="icon fa fa-search"></i>
                  <input class="input-text" type="text" name="eingabe" placeholder="search">
              </div> &nbsp;
              &nbsp;          <ul class="navbar-nav mr-auto drag ">
            <li class="nav-item ">
              <a class="nav-link" href="#">Politics<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a  class="nav-link" href="#">Tech <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a  class="nav-link" href="#">Business <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a  class="nav-link" href="#">World Expo <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a  class="nav-link" href="#">Coronavirus <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
           
          </ul>
          <ul class="navbar-nav ">
            <!-- <li class="nav-item "><a class="nav-link login" href="#"> <i class="icon fa fa-user login-icon"></i> Sign Up</a>
            </li> -->
                  
                                                                <!-- This if else condition is for chaniging the user icon to the user id if log in  -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon fa fa-user login-icon"></i> 
               
              </a>
              <ul>
                <!-- admin session checking the user is admin or not!  -->
                 
                 <li class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">Dashboard</a> 
              </li>
                <!-- <div class="dropdown-divider"></div> -->
                
            
              <li class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a> </li></ul>
            </li> 

               
                  <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          
        </div>
      </nav>
<!-- 
      admin wrapper -->

<div class="admin-wrapper">

    <div class="left-sidebar">
        <ul>
            <li><a href="index.php">Manage Posts</a></li>
            <li><a href="../users/index.php">Manage Users</a></li>
            <li><a href="../topics/index.php">Manage Topics</a></li>
        </ul>
    </div>

    <!-- admin-content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big" >ADD POST</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
             
            </div>

            <div class="content">
                <h2 class="page-title">Add Posts</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php');  ?>

            <form action="create.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                </div>
                <div>
                    <label>Body</label>
              <textarea name="body" id="body"><?php echo $body ?> </textarea>
                </div>
                <div>
                  <label>Image</label>
                  <input type="file" name="image" class="text-input">
                </div>
                <div>
                  <?php if (empty($published)): ?>
                  <label>
                    <input type="checkbox" name="published">Publish
                  </label>
                  <?php else: ?>
                    <label>
                    <input type="checkbox" name="published">Publish
                  </label>
                  <?php endif; ?>
                </div>
                <div>
                    <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                </div>
            </form>
            </div>
            

        </div>
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<script src="main.js"></script>
</body>
</html>