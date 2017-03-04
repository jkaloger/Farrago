<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- slick import -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- for now, we'll use the default theme -->
    <link rel="stylesheet" href="css/slick-theme.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">


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
        <!-- end of container -->
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
