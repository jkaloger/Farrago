<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

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
                    <div class="social one column">I</div>
                    <div class="social one column">T</div>
                    <div class="social one column">F</div>
                    <div class="social one column">Y</div>
                    <div class="title four columns"><h1>Farrago</h1></div>
                    <div class="spacer two columns"></div>
                    <div class="fodder two columns u-pull-right">F</div>
                </div>
            </div>
            <nav class="hdrNav">
                <ul class="navList">
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
            </nav>
        </header>
    
        <div class="hero">
            <div class="sliderGallery">
                <div class="sliderElement">A</div>
                <div class="sliderElement">B</div>
                <div class="sliderElement">C</div>
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
                    <img class="articleIMG" src="">
                    <h3>title</h3>
                    <span>Author</span>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                </div>
                <div class="article six columns">
                    <img class="articleIMG" src="">
                    <h3>title</h3>
                    <span>Author</span>
                    <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                    <span class="tag hvr-underline-from-left">tag1</span>
                    <span class="tag hvr-underline-from-left">tag2</span>
                    <span class="tag hvr-underline-from-left">tag3</span>
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
                Sign up to newsletter etc
            </div>
            <div class="empty one-third column">
                &nbsp;
            </div>
        </div>

        <div class="row footerSocial">
        </div>

        <div class="row links">

        </div>
    </div>
        
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.sliderGallery').slick({
        arrows: false,
        autoplay: true,
        dots: true
      });
    });
  </script>
</body>
</html>
