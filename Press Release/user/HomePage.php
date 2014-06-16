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
                    <h2>Welcome <?php echo $user_details['username']; ?>!!! </h2>

                    <article>
                        <table border="1">
                            <tr>
                                
                                
                                <th>
Post Owner name                                </th><th>
                                   Headline
                                </th>
                               <th>
                                    Release Date
                                </th>
                                <th>
                                    
                                    Options 
                                </th>
                            </tr>


                            <?php
                            
                            foreach ($posts as $post) : ?>
                                <tr>
                                    <td><?php echo $post->getUsername(); ?></td>
                                     <td><?php echo $post->getTitle(); ?></td>
                                    <td><?php echo $post->getDate(); ?></td>
                                    <td>
                                        <form action="index.php" method="post">
                                            <input type="hidden" name="action" value="edit_post" />
                                            <input type="hidden" name="postid" value="<?php echo $post->getID(); ?>" /> 
                                            <input type="submit" value="Edit" />
                                        </form>
                                    </td>
                                    <td>
                                        <form action="index.php" method="post">
                                            <input type="hidden" name="action" value="delete_post" />
                                            <input type="hidden" name="post_id" value="<?php echo $post->getID(); ?>" /> 
                                            <input type="submit" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>


                        </table>
                        <p><a href="index.php?action=add_post">Add New Post</a></p>

                    </article>



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
