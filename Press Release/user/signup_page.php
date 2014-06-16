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



                    <h2>Sign Up</h2>
                    <form name="signup_details"  method="post" id="signup_details" action="index.php" >
                        <input type="hidden"  name="action" value="signup_details" />




                        User <br><input type="text" id = "user" name="user" required="required" ><br>
                        Password <br><input type="password" id = "pass"     name="pass" required="required"><br>
                        Confirm Password <br><input type="password" id = "confirmpass" name="confirmpass" required="required" size="40"><br>
                        City <br><input id="city" type="text" name="city" required="required" ><br>
                        State <br><input type="text" id = "state" name="state" required="required" ><br>
                        Country <br><input type="text" id="country" name="country" ><br>
                        Account Type<br>
<select name="account_type">

                            <option value="0">Normal</option>
                            <option value="1">Admin</option>
                        </select>                
                        <br>    <br>
                        <p><?php if (isset($signup_message)) echo $signup_message; ?></p>

                        <br>    <input type="submit" name="Submit" />
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
                    <li class="current_page_item"><a href="index.php?action=login_page">Login</a></li>
                    
                </ul>
            </nav>

            <!-- Search -->
            <section class="is-search">
                <form method="post" action="#">
                    <input type="text" class="text" name="search" placeholder="Search" />
                </form>
            </section>



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
