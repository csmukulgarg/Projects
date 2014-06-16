<?php

require('model/user_repository.php');
require('model/dbcontext.php');
require('model/user_login_repository.php');
require('model/Post.php');
require('model/publisher.php');



if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'press_page';
}

if ($action == 'press_page') {
 $posts = PostsRepository::getAllPosts();
 
                   include('pressRelease.php');


} 


else if ($action == 'search_post') {
if (isset($_POST['search'])) {
        $search = $_POST['search'];
    $type = $_POST['searchtype'];
    }
    
    
if($type ==0)
 $posts = PostsRepository::getPostNewsBody($search);
 else if($type == 1)
 $posts = PostsRepository::getPostCity($search); 
 else if($type == 2)
 $posts = PostsRepository::getPostState($search); 
 else 
 $posts = PostsRepository::getPostCountry($search); 
                   include('pressRelease.php');
} 


else if ($action == 'sort_post') {
if (isset($_POST['sort'])) {
    $type = $_POST['sort'];
    }
 
if($type ==0)
 $posts = PostsRepository::getAllPosts();
 else if($type == 1)
 $posts = PostsRepository::getPostSortAuthor();
 else 
 $posts = PostsRepository::getPostSortCity(); 
 include('pressRelease.php');
} 
?>