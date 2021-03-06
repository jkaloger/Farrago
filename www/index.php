<!-- PROTOTYPE FOR TESTING. CODE=MESSY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farrago Magazine</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- hover effects -->
    <link rel="stylesheet" href="css/hover-min.css">

    <!-- slick import -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- for now, we'll use the default theme -->
    <link rel="stylesheet" href="css/slick-theme.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


</head>
<body>
    <!-- container for all elements -->
    <div class="container">
    
        <header class="hdrOuter">
            <div class="hdrTop">
                <div class="row">
                    <div class="social one column"><a href="https://www.facebook.com/farragomagazine/"><object data="img/ico/svg/facebook-square-black.svg" type="image/svg+xml"><img src=""></object></a></div>
                    <div class="social one column"><a href="https://twitter.com/farragomagazine"><object data="img/ico/svg/instagram-black.svg" type="image/svg+xml"><img src=""></object></a></div>
                    <div class="social one column"><a href="https://instagram.com/farragomagazine/"><object data="img/ico/svg/twitter-black.svg" type="image/svg+xml"><img src=""></object></a></div>
                    <div class="social one column"><a href="https://www.youtube.com/channel/UCYGA13ztSrZcyurecH_Fm0w"><object data="img/ico/svg/youtube-black.svg" type="image/svg+xml"><img src=""></object></a></div>
                    <div class="title four columns"><h1>Farrago</h1></div>
                    <div class="spacer two columns"></div>
                    <div class="fodder two columns u-pull-right">
                        <div class="hamburger"><div class="hamburger-in"></div></div>
                    </div>
                </div>
            </div>
            <nav class="hdrNav">
                <div>
                    <ul class="navList">
                        <!--<li class="navItem">
                            <a class="navLabel"><img height="65px" id="hdrLogo-Sticky" src="img/logoFarrago.png"></a>
                        </li>-->
                        <li class="navItem">
                            <a class="navLabel">
                                Campus
                            </a>
                            <div class="dropdown">
                                <ul class="dropdownContent">
                                    <?php 
                                        // create li elements dynamically?
                                        printf("<li>Dropdown Element</li>")
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="navItem">
                            <a class="navLabel">
                                Commentary
                            </a>
                            <div class="dropdown">
                                <ul class="dropdownContent">
                                    <?php 
                                        // create li elements dynamically?
                                        printf("<li>Dropdown Element</li>")
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="navItem">
                            <a class="navLabel">
                                Creative
                            </a>
                            <div class="dropdown">
                                <ul class="dropdownContent">
                                    <?php 
                                        // create li elements dynamically?
                                        printf("<li>Dropdown Element</li>")
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="navItem">
                            <a class="navLabel">
                                Video
                            </a>
                            <div class="dropdown">
                                <ul class="dropdownContent">
                                    <?php 
                                        // create li elements dynamically?
                                        printf("<li>Dropdown Element</li>")
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="navItem">
                            <a class="navLabel">
                                Radio
                            </a>
                            <div class="dropdown">
                                <ul class="dropdownContent">
                                    <?php 
                                        // create li elements dynamically?
                                        printf("<li>Dropdown Element</li>")
                                    ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="hdrNav-Sticky">
                <ul class="navList-Sticky">
                    <li id="hdrLogo-Sticky" class="navItem-Sticky">
                        <a class="navLabel-Sticky"><img width="15%" id="hdrLogo-Sticky" src="img/header-logo.png"></a>
                    </li>
                    <li class="navItem-Sticky">
                        <a class="navLabel-Sticky">
                            Campus
                        </a>
                        <div class="dropdown">
                            <ul class="dropdownContent">
                                <?php 
                                    // create li elements dynamically?
                                    printf("<li>Dropdown Element</li>")
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="navItem-Sticky">
                        <a class="navLabel-Sticky">
                            Commentary
                        </a>
                        <div class="dropdown">
                            <ul class="dropdownContent">
                                <?php 
                                    // create li elements dynamically?
                                    printf("<li>Dropdown Element</li>")
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="navItem-Sticky">
                        <a class="navLabel-Sticky">
                            Creative
                        </a>
                        <div class="dropdown">
                            <ul class="dropdownContent">
                                <?php 
                                    // create li elements dynamically?
                                    printf("<li>Dropdown Element</li>")
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="navItem-Sticky">
                        <a class="navLabel-Sticky">
                            Video
                        </a>
                        <div class="dropdown">
                            <ul class="dropdownContent">
                                <?php 
                                    // create li elements dynamically?
                                    printf("<li>Dropdown Element</li>")
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="navItem-Sticky">
                        <a class="navLabel-Sticky">
                            Radio
                        </a>
                        <div class="dropdown">
                            <ul class="dropdownContent">
                                <?php 
                                    // create li elements dynamically?
                                    printf("<li>Dropdown Element</li>")
                                ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
    
        <div class="hero">
            <div class="sliderGallery">
                <div class="sliderElement"><img src="http://placehold.it/1280x1080"></div>
                <div class="sliderElement"><img src="http://placehold.it/1280x1080"></div>
                <div class="sliderElement"><img src="http://placehold.it/1280x1080"></div>
            </div>

            <div class="tileGallery">
                <!-- Scrollable tiles -->
            </div>
        </div>

        <div class="section">
            <div class="sectionTitle twelve columns">
                <h2><span>video</span></h2>
            </div>

            <div class="row">

                <div class="video six columns">
                    <div class="videoTime">
                        <p>1:23</p>
                    </div>
                </div>
                <div class="video six columns">
                    <div class="videoTime">
                        <p>1:23</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="section">
            <div class="sectionTitle twelve columns">
                <h2><span>Commentary</span></h2>
            </div>

            <div class="row">

                <div class="article six columns">
                    <a href="#"><img class="hvr-float articleIMG" width="100%" src="http://placehold.it/1280x1080"></a>
                    <h3>title</h3>
                    <span>Author</span>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                    <div class="tag hvr-underline-from-left">this is a tag</div>
                    <div class="tag hvr-underline-from-left">tag2</div>
                    <div class="tag hvr-underline-from-left">tag3</div>
                    <div class="tag hvr-underline-from-left">tag4</div>
                    <div class="tag hvr-underline-from-left">tag5</div>
                    <div class="tag hvr-underline-from-left">tag6</div>
                    <div class="tag hvr-underline-from-left">tag7</div>
                    <div class="tag hvr-underline-from-left">tag8</div>
                    <div class="tag hvr-underline-from-left">tag9</div>
                    <div class="tag hvr-underline-from-left">tag10</div>
                    <div class="tag hvr-underline-from-left">tag11</div>
                    <div class="tag hvr-underline-from-left">tag12</div>
                    <div class="tag hvr-underline-from-left">tag13</div>
                    <div class="tag hvr-underline-from-left">tag14</div>
                </div>
                <div class="article six columns">
                    <a href="#"><img class="hvr-float articleIMG" width="100%" src="http://placehold.it/1280x1080"></a>
                    <h3>title</h3>
                    <span>Author</span>
                    <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                    <div class="tag hvr-underline-from-left">tag1</div>
                    <div class="tag hvr-underline-from-left">tag2</div>
                    <div class="tag hvr-underline-from-left">tag3</div>
                </div>

            </div>
        </div>
    <!-- end of container -->
    </div>

    <div class="footer">
        <div class="row newsletter">
            <div class="empty one-third column">
                &nbsp;
            </div>
            <div class="one-third column">
                <form>
                    <p>Sign up to newsletter etc</p>
                    <input type="text"><br>
                    <button type="submit" value="Sign Up">Sign Up</button>
                </form>
            </div>
            <div class="empty one-third column">
                &nbsp;
            </div>
        </div>

        <div class="row footerSocial">
            <div class="one-third column">
                &nbsp;
            </div>
            <div class="footerSocial-in one-third column">
                <a href="https://www.facebook.com/farragomagazine/"><object data="img/ico/svg/facebook-square.svg" type="image/svg+xml"><img src=""></object></a>
                <a href="https://twitter.com/farragomagazine"><object data="img/ico/svg/instagram.svg" type="image/svg+xml"><img src=""></object></a>
                <a href="https://instagram.com/farragomagazine/"><object data="img/ico/svg/twitter.svg" type="image/svg+xml"><img src=""></object></a>
                <a href="https://www.youtube.com/channel/UCYGA13ztSrZcyurecH_Fm0w"><object data="img/ico/svg/youtube.svg" type="image/svg+xml"><img src=""></object></a>
            </div>
            <div class="one-third columns">
                &nbsp;
            </div>
        </div>

        <div class="row links">
            <div class="FLogo one-third column">
                <h1>FARRAGO</h1>
            </div>
            <div class="links one-third column">
                <ul>
                    <li><h3>&nbsp;</h3></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Locations</a></li>
                    <li>&nbsp;</li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Got a tip?</a></li>
                    <li><h3>Sections</h3></li>
                    <li><a href="#">Campus</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Society</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Comment</a></li>
                </ul>
            </div>
            <div class="umsuLogo empty one-third column">
                <img src="img/umsuLogo.png" width="96%" style="margin-right: 4%">
            </div>
        </div>
    </div>
        
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/hamburger.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sliderGallery').slick({
                arrows: true,
                autoplay: true,
                dots: true
            });
        });
    </script>

    <script type="text/javascript">
        $(function(){
            var nav = $('.hdrNav-Sticky');
            var anchor = $('.hdrNav').offset().top
                       + $('.hdrNav').outerHeight(true);
            $(window).scroll(function(){
                var sc = $(window).scrollTop();
                if(sc >= anchor) {
                    nav.addClass("pull");
                } else {
                   nav.removeClass("pull");
                }
            });
        });
    </script>
</body>
</html>
