<?php if(isset($_SESSION['message'])):   ?>

<div class="msg  <?php echo $_SESSION['type']; ?>">
 <li> <?php echo $_SESSION['message']; ?></li>

 <?php
 unset($_SESSION['message']);

//unset function is use to neglect the value from the array

 unset($_SESSION['type']);     
 ?>

</div>
<?php endif; ?>