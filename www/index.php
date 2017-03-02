<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">


</head>
<body>
    <!-- container for all elements -->
    <div class="container">
    
        <header class="hdrOuter">
            <div class="hdrTop">
                <ul>
                    <li class="social"></li>
                    <li class="social"></li>
                    <li class="social"></li>
                    <li class="social"></li>
                    <li class="title"><h1>Farrago</h1></li>
                    <li class="fodder"></li>
                </ul>
            </div>
            <nav class="hdrNav">
                <ul class="navList">
                    <li class="navItem">
                        <span class="navLabel">
                            Campus
                        </span>
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
                        <span class="navLabel">
                            Commentary
                        </span>
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
                        <span class="navLabel">
                            Creative
                        </span>
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
                        <span class="navLabel">
                            Video
                        </span>
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
                        <span class="navLabel">
                            Radio
                        </span>
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
    </div>
    
</body>
</html>
