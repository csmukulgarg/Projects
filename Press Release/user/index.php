<?php

session_start();

require('../model/user_repository.php');
require('../model/dbcontext.php');
require('../model/user_login_repository.php');
require('../model/Post.php');
require('../model/publisher.php');




if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login_page';
}

if ($action == 'login_page') {
if(!isset($_SESSION['sess_user_id']))
    include('login_page.php');
else
        header("location: index.php?action=HomePage");

} else if ($action == 'change_password') {


    include('change_password.php');
} else if ($action == 'HomePage') {
    if (isset($_SESSION['sess_user_id'])) {
        $user_id = $_SESSION['sess_user_id'];
        $user_details = user_login_repository::getUserDetails($user_id);
        if (user_repository::is_valid_admin_login($user_id))
            $posts = PostsRepository::getAllPosts();
        else
            $posts = PostsRepository::getPostsByPublisher($user_id);

        include('HomePage.php');
    } else {

        header("location: index.php");
    }
} 


else if ($action == 'login_information') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $is_login = user_repository::is_valid_login($username, $password);
    if (!$is_login) {
        $is_login = user_repository::is_valid_login($username, $password);
        $login_message = "Invalid Username/Password";
        include('login_page.php');
    } else {
        $user_details = user_login_repository::getUserDetailsUsername($username);
        $_SESSION['sess_user_id'] = $user_details['id'];
        $publisher_id = $_SESSION['sess_user_id'];
       
       
        if (user_repository::is_valid_admin_login($publisher_id))
            $posts = PostsRepository::getAllPosts();
        else
            $posts = PostsRepository::getPostsByPublisher($publisher_id);
        include('HomePage.php');
    }
}


else if ($action == 'edit_post') {
    // Get the IDs
    $postid = $_POST['postid'];
    $user_id = $_SESSION['sess_user_id'];

    $posts = PostsRepository::getPost($postid);


    // Display the Book List page for the current publisher
    include('editPost.php');
} else if ($action == 'add_new_post') {


    $user_id = $_SESSION['sess_user_id'];

    $post = $_POST['post'];
    $post_date = $_POST['date'];
    $post_title = $_POST['title'];
    $post_summary = $_POST['Summary'];
    $post_name = $_POST['CompanyName'];
    $post_email = $_POST['CompanyEmail'];
 

    $new_post = new Post($post_title, $post, $post_date, $user_id, $post_summary, $post_name, $post_email);
   
    
    PostsRepository::addPost($new_post, $user_id);
    header("location: index.php?action=HomePage");
} 

else if ($action == 'update_post') {
    // Get the IDs

    $post_id = $_POST['postid'];
    $post = $_POST['post'];
    $post_date = $_POST['date'];
    $post_title = $_POST['title'];
    $user_id = $_SESSION['sess_user_id'];
   $post_summary = $_POST['Summary'];
    $post_name = $_POST['CompanyName'];
    $post_email = $_POST['CompanyEmail'];
    
    PostsRepository::updatePost($post_id, $post_title, $post, $post_date, $user_id, $post_summary, $post_name, $post_email);
    header("location: index.php?action=HomePage");
} 









else if ($action == 'add_post') {

    include('addPost.php');
} 

else if ($action == 'delete_post') {
    // Get the IDs


    $post_id = $_POST['post_id'];

    // delete the post
    PostsRepository::deletePost($post_id);
    header("location: index.php?action=HomePage");
} else if ($action == 'logout') {
    session_unset();
    session_destroy();
    header("location: ../index.php");
} 

else if ($action == 'signup_page') {
if(!isset($_SESSION['sess_user_id']))
  include('signup_page.php');
else
        header("location: index.php?action=HomePage");

  
} else if ($action == 'signup_details') {
    // print_r($_POST);
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $is_admin = $_POST['account_type'];

    if ($_POST['confirmpass'] != $_POST['pass']) {
        $signup_message = "Password Mismatch! Please try again";
        include('signup_page.php');
    } else {
//username exists

        $is_valid_Username = user_repository::is_valid_Username($username);

        if ($is_valid_Username) {
            $signup_message = "Username already exists, Try something else!!!";
            include('signup_page.php');
        }


        $user = user_repository::add_user($username, $pass, $city, $state, $country, $is_admin);
        $signup_message = "account created";

        include('signup_page.php');
    }
} else if ($action == 'reset_password') {

    $passwordvalue = $_POST['cur_pwd'];
    $password = $_POST['password'];
    $confirm_pwd = $_POST['confirm_pwd'];

    echo $passwordvalue . $password . $confirm_pwd;

    $user_id = $_SESSION['sess_user_id'];

    $data_pwd = user_login_repository::getPassword($user_id);


    if ($password == $confirm_pwd && $data_pwd == $passwordvalue) {
        user_login_repository::userUpdatePassword($user_id, $confirm_pwd);
        $login1 = "Password is changed!!!!";
    } else {
        $login1 = "Password not matched please try again!!!!";
    }

    include('change_password.php');
}
?>