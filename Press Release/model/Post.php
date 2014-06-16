<?php

class Post {

    private $id, $title, $post, $date, $user_id,$user_name,$post_summary,$post_name,$post_email;

    public function __construct( $title, $post, $date, $user_id,$post_summary,$post_name,$post_email) {
      //  $this->id = $id;
        $this->title = $title;
        $this->post = $post;
        $this->date = $date;
        $this->user_id = $user_id;
          $this->post_summary = $post_summary;
        $this->post_name = $post_name;
        $this->post_email = $post_email;
    }
    
     public function setSummary($post_summary) {
        $this->post_summary = $post_summary;
    }

    public function getSummary() {
        return $this->post_summary;
    }
     public function setCompanyName($post_name) {
        $this->post_name = $post_name;
    }

    public function getCompanyName() {
        return $this->post_name;
    }
    public function setCompanyEmail($post_name) {
        $this->post_email = $post_name;
    }

    public function getCompanyEmail() {
        return $this->post_email;
    }
    
    public function setID($id) {
        $this->id = $id;
    }

    public function getID() {
        return $this->id;
    }
    
       public function setUsername($user_name) {
        $this->user_name = $user_name;
    }

    public function getUsername() {
        return $this->user_name;
    }


    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setPost($post) {
        $this->post = $post;
    }

    public function getPost() {
        return $this->post;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getDate() {
        return $this->date;
    }

    public function getUserID() {
        return $this->user_id;
    }

    public function setPublisher($user_id) {
        $this->user_id = $user_id;
    }

    public function getImageFilename() {
        $image_filename = $this->id . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = '../images/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText() {
        $image_alt = 'Image: ' . $this->getImageFilename();
        return $image_alt;
    }

}

?>
