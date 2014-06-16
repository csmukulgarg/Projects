<?php

class PostsRepository {

//$id, $title, $post, $date, $user_id
    public static function getAllPosts() {
        $db = DBContext::getDB();
        $query = "SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid FROM Posts INNER JOIN user  ON Posts.user_id =  user.id ORDER BY DATE DESC ";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

    public static function updatePost($post_id, $post_title, $post, $post_date, $user_id,$post_summary, $post_name, $post_email) {

        $db = DBContext::getDB();
        $query = "update Posts set title = :title , "
                . "post = :post, "
                . "date = :date ,"
                 . "summary = :summary, "
                . "companyName = :companyName ,"
                . "companyEmail = :companyEmail  "
                . "where id = $post_id";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':title', $post_title);
            $statement->bindValue(':post', $post);
            $statement->bindValue(':date', $post_date);
            $statement->bindValue(':summary', $post_summary);
            $statement->bindValue(':companyName', $post_name);
            $statement->bindValue(':companyEmail', $post_email);

            
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

//$title, $post, $date, $user_id

    public static function getPostsByPublisher($publisher_id) {
        $db = DBContext::getDB();
        $query = "SELECT summary,companyName,companyEmail,Posts.id as id,title,date,post,username FROM Posts INNER JOIN user  on Posts.user_id =  user.id  WHERE  user_id = $publisher_id  ORDER BY Posts.id";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $publisher_id, $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

    public static function getPost($post_id) {
        $db = DBContext::getDB();
        $query = "SELECT * FROM Posts WHERE id = $post_id";
        $result = $db->query($query);
        $row = $result->fetch();
        return $row;
    }

    public static function deletePost($post_id) {
        $db = DBContext::getDB();
        $query = "DELETE FROM Posts WHERE id = $post_id";
        $row_count = $db->exec($query);
        return $row_count;
    }

    //$id, $title, $post, $date, $user_id

    public static function addPost($posts, $publisher_id) {
        $db = DBContext::getDB();
        $title = $posts->getTitle();
        $date = $posts->getDate();
        $postdata = $posts->getPost();
        $summary = $posts->getSummary();
        $cname = $posts->getCompanyName();
        $cemail = $posts->getCompanyEmail();
        
        $query = "INSERT INTO Posts (user_id, post, date, title , summary , companyName , companyEmail )
            VALUES ('$publisher_id', '$postdata', '$date', '$title', '$summary', '$cname', '$cemail')";
       
    
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function getPostNewsBody($title) {
        $db = DBContext::getDB();
        $db = DBContext::getDB();
        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid FROM Posts inner join user on posts.user_id = user.id WHERE post like '%" . $title . "%'";
       
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

    public static function getPostCity($title) {
        $db = DBContext::getDB();
        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid FROM Posts inner join user on posts.user_id = user.id WHERE city like '" . $title . "'";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

    public static function getPostState($title) {
        $db = DBContext::getDB();
        $posts = array();

        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid FROM Posts inner join user on posts.user_id = user.id WHERE state like '" . $title . "'";
        $result = $db->query($query);
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

    public static function getPostCountry($title) {
        $db = DBContext::getDB();
        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid FROM Posts inner join user on posts.user_id = user.id WHERE country like '" . $title . "'";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }

      public static function getPostSortAuthor() {
        $db = DBContext::getDB();
        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid "
                . "FROM Posts inner join user on posts.user_id = user.id order by user.id";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }
          public static function getPostSortCity() {
        $db = DBContext::getDB();
        $query = " SELECT summary,companyName,companyEmail,Posts.id as id , title , date , post, username , user.id as userid "
                . "FROM Posts inner join user on posts.user_id = user.id order by user.city";
        $result = $db->query($query);
        $posts = array();
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['post'], $row['date'], $row['userid'], $row['summary'], $row['companyName'], $row['companyEmail']);
            $post->setID($row['id']);
            $post->setUsername($row['username']);
            $posts[] = $post;
        }
        return $posts;
    }
}
?>

