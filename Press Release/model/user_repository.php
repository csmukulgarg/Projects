<?php

class user_repository {

    public static function add_user($username, $password, $city, $state, $country, $is_admin) {
        $db = DBContext::getDB();
        $query = 'INSERT INTO user ( `username`, `password`, `city`, `state`, `country`, `account_type`) VALUES  (  :username , :password , :city , :state , :country , :account_type)';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':city', $city);
            $statement->bindValue(':state', $state);
            $statement->bindValue(':country', $country);
            $statement->bindValue(':account_type', $is_admin);           
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    public static function is_valid_login($username, $password) {
        $db = DBContext::getDB();
        $query = 'SELECT id FROM user WHERE username = :username AND password = :password ';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            $statement->execute();
            $valid = ($statement->rowCount() >= 1);
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
        return $valid;
    }

     public static function is_valid_Username($username) {
        $db = DBContext::getDB();
        $query = 'SELECT id FROM user
              WHERE username = :username ';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->execute();
            $valid = ($statement->rowCount() >= 1);
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
        return $valid;
    }
    
    
  public static function is_valid_admin_login($id) {
    $db = DBContext::getDB();
        $query = "SELECT id FROM user WHERE id = $id and account_type = 1";
       
        
        try {
            $statement = $db->prepare($query);
     //       $statement->bindValue(':id', $id);
            $statement->execute();
            $valid = ($statement->rowCount() >= 1);
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
        return $valid;
    }

}
