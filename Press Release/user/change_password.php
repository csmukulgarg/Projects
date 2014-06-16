
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

 <h2>Change Password</h2>
                    <form method="post" name="change"> 
                        <input type="hidden" name="action" value="reset_password"/>

                        <?php if(isset($login1))echo $login1; ?>
                        <p>Old Password<br />
                            <input type="password" name="cur_pwd"  id="cur_pwd"  class="ser" /></p>
                        <p>New Password<br />
                            <input type="password" name="password"  id="password" class="ser" />
                        </p>
                        <p>Confirm Password<br />
                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="ser" />
                        </p>
                        <p align="center">
                            <input name="submit" type="submit" value="Change Password" class="submit" />
                        </p>
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
