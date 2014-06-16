<?php
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    echo "I am here!";
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Press Release</title>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
        <script src="../js/jquery.min.js"></script>
        <script src="../js/skel.min.js"></script>
        <script src="../js/skel-panels.min.js"></script>
        <script src="../js/init.js"></script>

        <link rel="stylesheet" href="../css/skel-noscript.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-desktop.css" />
        <link rel="stylesheet" href="../css/style-wide.css" />

    </head>
    <body class="left-sidebar">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Content -->
            <div id="content">

                <div id="content-inner">
                    <h2>Edit Post</h2>
                    
                
 <br><br><form action="" method="post">
<input type="hidden" name="action" value="update_post" />
<input type="hidden" name="postid" value="<?php echo $postid; ?>" /> 
 
  <strong>Headline:*</strong> <input type="text" name="title" value="<?php echo $posts['title']; ?> " required/><br/>
  <strong>Summary: *</strong> <textarea name="Summary" rows="5" cols="40" required> <?php echo $posts['summary']?></textarea><br/>
 <strong>Post: *</strong> <textarea name="post" rows="10" cols="40" required> <?php echo $posts['post']?></textarea><br/>

  <strong>Company Name:*</strong> <input type="text" name="CompanyName"  value="<?php echo $posts['companyName'] ?>" required/><br/>
 <strong>Company Email:*</strong> <input type="text" name="CompanyEmail" value="<?php echo $posts['companyEmail'] ?>"  required/><br/>

 <strong>Release Date: *</strong> <input type="date" name="date" value="<?php echo $posts['date'] ?>" required/><br/>

 
 
 
 
 
 
 
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </form> 

                </div>



            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="../">Press Release</a></h1>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="current_page_item">
                        <a href="index.php?action=HomePage">Home Page</a></li>
                    <li><a href="index.php?action=change_password">Change Password</a></li>
                    <li><a href="index.php?action=logout"> Logout</a></li>
                </ul>
            </nav>



            <!-- Copyright -->
            <div id="copyright">
                <p>
                    &copy; 2014 Mukul's Press Release Site.<br />

                </p>
            </div>

        </div>

    </div>

</body>
</html>
