
<?php

    

 include(ROOT_PATH . "/app/database/db.php");
 $table = 'users';

    function loginUser($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        $_SESSION['admin'] = $user['admin'];
        
        $_SESSION['message'] = 'you are logged in';
        
        $_SESSION['type'] = 'success';
    
        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL . '/admin/dashboard.php');
        } else {
            header('location: ' . BASE_URL . '/index.php');                 //the header function will redirect the user into index page
        }
        
      
         exit();
    }



if(isset($_POST['register-btn'])) {
$errors = array();

    if(empty($_POST['username'])) {
        array_push($errors, 'username is required');
    }
    if(empty($_POST['email'])) {
        array_push($errors, 'email is required');
    }
    if(empty($_POST['password'])) {
        array_push($errors, 'password is required');
    }
   
    
    if($_POST['passwordConf'] !== $_POST['password']){
        array_push($errors, 'password does not match');
    }

    // dd($errors);

     unset($_POST['register-btn'], $_POST['passwordConf']);
     $_POST['admin'] = 0;

    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); 
   
    $user_id = create($table, $_POST);
    $user = selectOne($table, ['id' => $user_id]);
    
    // dd($user);
        loginUser($user);
    //log user in
   
}



if(isset($_POST['login-btn']))
{

    

    $user = selectOne($table, ['username' => $_POST['username']]);

    if ($user && password_verify($_POST['password'], $user['password'])) {
      //log user in
      loginUser($user);
       // login redirect
    }
    
}