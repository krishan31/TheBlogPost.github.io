<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

    $table = 'posts';
    $posts = selectAll($table);
   
    $errors = array();
    $title = "";
    $body = "";
    $published = "";
  

    if (isset($_GET['id'])) {
        $post = selectOne($table, ['id' => $_GET['id']]);
        $id = $post['id'];
        $title = $post['title'];
        $body = $post['body'];
        $published = $post['published'];
    } 



    if (isset($_GET['delete_id'])) {
        $count = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = "Post deleted Successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php");       //this is the delete function which will delete the publish post from database and from the admin
        exit();
    }

    if (isset($_GET['published']) && isset($_GET['p_id'])) {
        $published = $_GET['published'];
        $p_id = $_GET['p_id'];
        //.. update published field on the post and set the msg
        $count = update($table, $p_id, ['published' => $published]);   ///  we aare publishing and published the post using update functio

        $_SESSION['message'] = "Post published state changed";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php");       //this is the delete function which will delete the publish post from database and from the admin
        exit();
    }

    

if(isset($_POST['add-post'])){
 
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

       

        $result =  move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
          
        }
    } else {
        array_push($errors, "Post image required");
    }
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        // $_POST['body'] = htmlentities($_POST['body']);  this is used to (secure,hide) the code or text in the database
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created Successfully";
        $_SESSION['type'] = "success";

        header("location: " . BASE_URL . "/admin/posts/index.php");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
                                             //after the user created a post will redirect to the 'manage post' page
}


if (isset($_POST['update-post'])) {
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

                                                                                                    //this above one and below code is fetching or uploading the image

        $result =  move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
          
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        // $_POST['body'] = htmlentities($_POST['body']);  this is used to (secure,hide) the code or text in the database
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated Successfully";
        $_SESSION['type'] = "success";

        header("location: " . BASE_URL . "/admin/posts/index.php");
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}