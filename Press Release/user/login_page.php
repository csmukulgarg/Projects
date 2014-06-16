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

                    <h2>Login</h2>
                    <form action="." method="post" id="login_form">
                        <input type="hidden" name="action" value="login_information"/>

                        <label>Username:</label><br>
                        <input type="text" name="username" />
                        <br />

                        <label>Password:</label><br>
                        <input type="password" name="password" />
                        <br />

                        <label>&nbsp;</label><br>
                        <p><?php if (isset($login_message)) echo $login_message; ?></p>                <input type="submit" value="Login"/>
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
                    <li class="current_page_item"><a href="index.php?action=signup_page">Sign Up</a></li>
                   
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
