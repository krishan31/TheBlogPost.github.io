
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
              <?php if(isset($_SESSION['id'])):   ?>      
                                                                <!-- This if else condition is for chaniging the user icon to the user id if log in  -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon fa fa-user login-icon"></i> 
                <?php echo $_SESSION['username']; ?>
              </a>
              <ul>
                <!-- admin session checking the user is admin or not!  -->
              <?php if($_SESSION['admin']): ?>     
                 <li class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a> 
              </li>
                <!-- <div class="dropdown-divider"></div> -->
                
              <?php endif; ?>
              <li class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a> </li></ul>
            </li> 

                <?php else: ?>
                  <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL . '/register.php' ?>" tabindex="-1" aria-disabled="true">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL . '/login.php' ?>" tabindex="-1" aria-disabled="true">Login</a>
            </li>

                <?php endif; ?>
          
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          
        </div>
      </nav>

      
<!-- 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script src="../project-1/assets/main.js"></script>
</body>
</html> -->