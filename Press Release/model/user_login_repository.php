<?php

class user_login_repository {

    public static function getPassword($username) {
        $db = DBContext::getDB();
        $query = "SELECT password FROM user WHERE id = $username";
        $result = $db->query($query);
        $row = $result->fetch();
        return $row['password'];
    }
     public static function getUserDetailsUsername($username) {
        $db = DBContext::getDB();
        $query = "SELECT * FROM user WHERE username = '".$username."'";
        $result = $db->query($query);
      
        $row = $result->fetch();
      
        return $row;
    }
      public static function getUserDetails($user_id) {
        $db = DBContext::getDB();
        $query = "SELECT * FROM user WHERE id = '".$user_id."'";
        $result = $db->query($query);
      
        $row = $result->fetch();
      
        return $row;
    }
    public static function userUpdatePassword($userid,$new_pass) {
        $db = DBContext::getDB();
        $query = "update user set password = :pass where id = :id";
         try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pass', $new_pass);
        $statement->bindValue(':id', $userid);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
}
?>

