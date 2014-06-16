<!DOCTYPE HTML>
<!--
        Striped 2.5 by HTML5 Up!
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Press Release</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/style-wide.css" />
        </noscript>
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
    </head>
    <body class="left-sidebar">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Content -->
            <div id="content">

                <div id="content-inner">

                    
                    

                    <article class="is-post is-post-excerpt">
                        <h2 style="text-align:center"><a href="#">Welcome to Press Release</a></h2>
                        <span class="byline" style="text-align:center">Press Release Management Website for Company </span>
   
                                                </article>

                            <?php
                            
                            foreach ($posts as $post) : ?>
                    <article class="is-post is-post-excerpt">

                        <h2><?php echo $post->getTitle(); ?></h2>
                        <span class="byline"><?php echo $post->getSummary(); ?></span>
                        <h1><?php echo $post->getCompanyName(); ?>, <?php echo $post->getCompanyEmail(); ?> </h1>
                        </header>
                        <div class="info">
                         
                            <?php
                            
                            $mydate = $post->getDate();

                            $month = date("M",strtotime($mydate));
                           $day= date("d",strtotime($mydate));

                          
                            
                            ?>
                            <span class="date"><span class="month"><?php echo $month; ?></span> <span class="day"><?php echo $day; ?></span></span>
                            
                            
                        </div>
                        <p>
                        <?php echo $post->getPost(); ?>  
                        
                        </p>
                    </article>
                            <?php endforeach; ?>

                    <!-- Post -->
                




                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="">Press Release</a></h1>
                </div>



                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="current_page_item">
                            <a href="user/index.php?action=login_page">Login</a></li>
                        <li><a href="user/index.php?action=signup_page">Signup</a></li>
                    </ul>
                </nav>



		<!-- Search -->
                
							<section >
                                                                                                            <b>Sort</b> 
        <form method="post" action="index.php">
        <input type="hidden"  name="action" value="sort_post" />
 <select name="sort" onchange="this.form.submit()">
         <option value="0">Date Published</option>
                            <option value="1">Author</option>
                            <option value="2">City</option>

                        </select> 
                                                                </form>
							</section>
                
                
                           
							<section class="is-search">
                                                        <b>Search</b> 
                                                            <form method="post" action="index.php">
                                                                                        <input type="hidden"  name="action" value="search_post" />

									<input type="text" class="text" name="search" placeholder="Search" />
								 <select name="searchtype">

                            <option value="0">News Body</option>
                            <option value="1">City</option>
                            <option value="2">State</option>
                            <option value="3">Country</option>

                        </select> 
                                                                                               <input type="submit" value="Submit" />
             
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
