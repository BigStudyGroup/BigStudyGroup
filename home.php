<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <!-- Required meta tags always come first -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title >BigStudyGroup</title>
        <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\test\css\style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        
        
    </head>
    <body>
        <div class="body">
                <img src="C:\xampp\htdocs\test\images\BSG-4.JPG" class="logo" align="left">
                <div class="search">
                    Search: <input type="text">
                    &nbsp;
                    <i class="fa fa-search" aria-hidden="false"></i>
                    <ul>
                        <li><button class="logout"><a href="index.html">logout</a></button>
                        </li>
                        <li>Hi <?php echo($user_name);?>
                        </li>
                    </ul>
                </div>
            <div class="main">
                    <ul class="mainnav">
                        <li><a href="#">HOME</a></li>
                        <li class="hassubs"><a href="#">PUBLICATIONS</a>
                            <ul class="dropdown">
                                <li class="subs hassubs"><a href="#">Theme 1</a>
                                    <ul class="dropdown">
                                        <li class="subs"><a href="#">Topic 1</a></li>
                                        <li class="subs"><a href="#">Topic 2</a></li>
                                        <li class="subs"><a href="#">Topic 3</a></li>
                                    </ul>
                                </li>
                                <li class="subs"><a href="#">Theme 2</a></li>
                                <li class="subs hassubs"><a href="#">Theme 3</a>
                                    <ul class="dropdown">
                                        <li class="subs"><a href="#">Topic 1</a></li>
                                        <li class="subs"><a href="#">Topic 2</a></li>
                                        <li class="subs"><a href="#">Topic 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="hassubs"><a href="#">WORKSHOPS</a>
                            <ul class="dropdown">
                                <li class="subs hassubs"><a href="#">Study Theme 1</a>
                                    <ul class="dropdown">
                                        <li class="subs"><a href="#">Blogs</a></li>
                                        <li class="subs"><a href="#">Discussion Posts</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">CONSULTING</a></li>
                    </ul>
                </div>
                <br>
                <section>
                    <div class="sdiv">
                        <div class="s1">
                            <nav></nav>
                            <article>
                            Abt BSG what is BSG 
                            Passion
                            goal
                            </article>
                        </div>
                        <div class="s2">
                            <article></article>
                            <article></article>
                            <article>
                            Abt BSG what is BSG 
                            Passion
                            goal
                            </article>
                        </div>
                    </div>
                    <article class="contactus">
                                Customer Name:<input type="text"><br><br>
                                Customer Email:<input type="text"><br><br>
                                Customer Ph.No:<input type="tel"><br><br>
                                Comment:<br><input type="text"><br><br>
                                <input type="submit" value="submit">
                    </article>
                </section>
                
            <footer>
                <hr>
                &copyCopyright 2019 All Right Reserve : BSG
            </footer>
        </div>
            <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
            <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>