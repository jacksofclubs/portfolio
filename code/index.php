<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8" />
    <title>Kevin Jacks - Portfolio</title>
    <!--mobile-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--stylesheets-->
    <!--Flickity CDN-->
    <!--<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">-->
    <!--<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>-->
    <!--Flickity local resources-->
    <!--<link rel="stylesheet" href="stylesheets/flickity.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <!--javascript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <!--links-->
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="images/favicon.ico">
</head>


<!-- begin body -->

<body>
    <!-- begin header -->
    <header class="navigation" role="banner">
        <div class="navigation-wrapper">
            <!--<a href="javascript:void(0)" class="logo">
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="Logo Image">
                </a>-->
            <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
            <nav role="navigation">
                <ul id="js-navigation-menu" class="navigation-menu show">
                    <li class="nav-link"><a href="#about-anchor">About</a></li>
                    <li class="nav-link"><a href="#portfolio-anchor">Portfolio</a></li>
                    <li class="nav-link"><a href="#skills-anchor">Skills</a></li>
                    <li class="nav-link"><a href="#contact-anchor">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!--begin about-->
    <a name="about-anchor"></a>
    <div class="secondary-bg">
        <article class="type-system-geometric" id="about">
            <h1 class="title">Kevin Jacks</h1>
            <hr class="divider">
            <h2 class="subtitle">Web Development - Software Applications</h2>
            <div class="row">
                <div class="about-column">
                    <p>I'm Kevin Jacks.  I used to be an engineer but switched careers to follow my passion of software development.  I'm currently
                        finishing up my schooling at Milwaukee Area Technical College with dual associate degrees: Web and Software Developer & Mobile Applications Developer.
                         I work full-time as a Software Developer on a web application providing ISP software solutions.</p>
                </div>
                <div class="about-column">
                    <p>I grew up on a dairy farm in rural central Wisconsin.  I received a Bachelor's Degree from UW-Stout in Engineering Technology
                        and worked as an Energy Engineer for four years before switching to software development.  I currently live in the Milwaukee
                        area with my wife Tracey and 2 year old son Jameson.</p>
                </div>
            </div>
            <div class="icons">
                <a href="https://github.com/jacksofclubs">
                    <i class="fa fa-github-square fa-footer" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/kevin-jacks-96013a97">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
                <!--<i class="fa fa-file-text" aria-hidden="true"></i>-->
            </div>
        </article>
    </div>


<<<<<<< HEAD
        <!--<div class="modal">
            <label for="modal-8">
                <div class="modal-trigger">Click Here</div>
            </label>
        </div>        -->

=======
    <!--validation confirmation-->
    <?php
            // $validation = "";
            if (isset($_GET['validation'])) {
            $validation = $_GET['validation'];

                if ($validation == "true") {
                    echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Failed!')</script>";
                }
            }
            // echo ("Validation result is: $validation");
        ?>
>>>>>>> f8626e62c4c96d4e5863be9212b8502adddf517b

        <!--begin portfolio-->
        <a name="portfolio-anchor"></a>
        <div class="base-bg">
            <article class="type-system-geometric" id="carousel">
                <h2>Portfolio</h2>
                <div class="main-carousel carousel" data-flickity='{ 
                        "wrapAround": true, 
                        "imagesLoaded": true, 
                        "percentPosition": false,
                        "autoPlay": 2000
                    }'>
                    <!--Project 1-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/cabin.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Online Deer Registration Website</h4>
                                <p>A mock-up website that allows you to register your deer with a fast and responsive online form.  View the results of the database from an administration page.</p>
                                <div class="modal">
                                    <label for="modal-1">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 2-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/mobile2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Deer Hunting License Android App</h4>
                                <p>A mock-up app for the Android platform that allows you to purchase a deer hunting license and save the information as proof of purchase.</p>
                                <div class="modal">
                                    <label for="modal-2">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 3-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/shopping2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Grocery List Application</h4>
                                <p>Keep track of your grocery list with this handy desktop application.  Allows you to add, update, and delete items.</p>
                                <div class="modal">
                                    <label for="modal-3">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 4-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/webcode2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Gaming Group Website</h4>
                                <p>A great looking website that runs completely on the client side.  This site serves as a central hub for a social group.  The first website I ever created.</p>
                                <div class="modal">
                                    <label for="modal-4">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 5-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/rocket2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Space-Themed Trivia Game</h4>
                                <p>Test your space knowledge with this trivia game.  Fun for all ages.</p>
                                <div class="modal">
                                    <label for="modal-5">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 6-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/circus.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Halloween eCommerce Site</h4>
                                <p>A one-stop shop for all your Halloween needs!  A great selection of masks and other items.</p>
                                <div class="modal">
                                    <label for="modal-6">
                                        <div class="modal-trigger"><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 7-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/submarine.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Baby Toys eCommerce Site</h4>
                                <p>Browse our selection of baby toys on a fast, responsive website that looks great on any device.</p>
                                <div class="modal">
                                    <label for="modal-7">
                                        <div class="modal-trigger" ><i class="fa fa-search-plus" aria-hidden="true" title="Click to View Project"></i></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <br>
        </div>

<<<<<<< HEAD
=======
        <!--begin portfolio-->
        <a name="portfolio-anchor"></a>
        <div class="base-bg">
            <article class="type-system-geometric" id="carousel">
                <h2>Portfolio</h2>
                <div class="main-carousel carousel" data-flickity='{ 
                        "wrapAround": true, 
                        "imagesLoaded": true, 
                        "percentPosition": false,
                        "autoPlay": 2000
                    }'>
                    <!--Project 1-->
                    <!--<img src="images/website2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/cabin.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Online Deer Registration Website</h4>
                                <p>A mock-up website that allows you to register your deer with a fast and responsive online form.  View the results of the database from an administration page.</p>
                                <div class="modal">
                                    <label for="modal-1">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 2-->
                    <!--<img src="images/mobile2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/mobile2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Deer Hunting License Android App</h4>
                                <p>A mock-up app for the Android platform that allows you to purchase a deer hunting license and save the information as proof of purchase.</p>
                                <div class="modal">
                                    <label for="modal-2">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 3-->
                    <!--<img src="images/checklist2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/shopping2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Grocery List Application</h4>
                                <p>Keep track of your grocery list with this handy desktop application.  Allows you to add, update, and delete items.</p>
                                <div class="modal">
                                    <label for="modal-3">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 4-->
                    <!--<img src="images/shopping2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/webcode2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Gaming Group Website</h4>
                                <p>A great looking website that runs completely on the client side.  This site serves as a central hub for a social group.  The first website I ever created.</p>
                                <div class="modal">
                                    <label for="modal-4">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 5-->
                    <!--<img src="images/webcode2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/rocket2.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Space-Themed Trivia Game</h4>
                                <p>Test your space knowledge with this trivia game.  Fun for all ages.</p>
                                <div class="modal">
                                    <label for="modal-5">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 6-->
                    <!--<img src="images/rocket2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/circus.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Halloween eCommerce Site</h4>
                                <p>A one-stop shop for all your Halloween needs!  A great selection of masks and other items.</p>
                                <div class="modal">
                                    <label for="modal-6">
                                        <div class="modal-trigger">Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project 7-->
                    <!--<img src="images/rocket2.png" alt="">-->
                    <div class="hover-tile-outer carousel-cell">
                        <div class="hover-tile-container">
                            <div class="hover-tile hover-tile-visible"><img src="images/submarine.png" alt=""></div>
                            <div class="hover-tile hover-tile-hidden">
                                <h4>Baby Toys eCommerce Site</h4>
                                <p>Browse our selection of baby toys on a fast, responsive website that looks great on any device.</p>
                                <div class="modal">
                                    <label for="modal-7">
                                        <div class="modal-trigger" >Click to View Project</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <br>
        </div>
>>>>>>> f8626e62c4c96d4e5863be9212b8502adddf517b

        <!--begin skills-->
        <a name="skills-anchor"></a>
        <div class="secondary-bg">
            <article class="type-system-geometric" id="skills">
                <h2>Skills</h2>
                <div class="row">
                    <div class="skills-column">
                        <div class="skills-subcolumn">
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;PHP</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;SQL</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;ASP.NET</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;Java</span></i>
                        </div>
                    </div>
                    <div class="skills-column">
                        <div class="skills-subcolumn">
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;C#</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;JavaScript</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;jQuery</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;SASS</span></i>
                        </div>
                    </div>
                </div>
            </article>
        </div>

<<<<<<< HEAD
=======
        <!--begin skills-->
        <a name="skills-anchor"></a>
        <div class="secondary-bg">
            <article class="type-system-geometric" id="skills">
                <h2>Skills</h2>
                <div class="row">
                    <div class="skills-column">
                        <div class="skills-subcolumn">
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;PHP</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;SQL</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;ASP.NET</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;Java</span></i>
                        </div>
                    </div>
                    <div class="skills-column">
                        <div class="skills-subcolumn">
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;C#</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;JavaScript</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;jQuery</span></i>
                            <br>
                            <i class="fa fa-check-square-o" aria-hidden="true"><span class="fa-text">&nbsp;SASS</span></i>
                        </div>
                    </div>
                </div>
            </article>
        </div>
>>>>>>> f8626e62c4c96d4e5863be9212b8502adddf517b

        <!--begin contact-->
        <a name="contact-anchor"></a>
        <div class="base-bg">
            <article class="type-system-geometric" id="contact">
                <div class="row">
                    <h2>Contact</h2>
                </div>
                <div class="row-contact">
                    <form action="contact_me.php" method="post" name="contact_form" id="contact_form" onSubmit="submitForm(this)" enctype=”multipart/form-data”>
                        <label for="name">Name:</label>
                        <div style="clear:both"></div>
                        <input type="text" name="name" id="name" placeholder="Your Full Name" required><br>
                        <label for="email">Email Address:</label>
                        <div style="clear:both"></div>
                        <input type="email" name="email" id="email" placeholder="yourname@example.com" required><br>
                        <label for="phone">Phone Number:</label>
                        <div style="clear:both"></div>
                        <input type="tel" name="phone" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="555-555-5555" required><br>
                        <div style="clear:both"></div>
                        <label for="message">Message:</label>
                        <div style="clear:both"></div>
                        <textarea name="message" id="message" placeholder="Your message here" required></textarea>
                        <br>
                        <button type="submit" class="btn btn-default" id="submit" name="btnSubmit" value="submit">Submit</button>
                        <br><br>
                    </form>
                </div>
            </article>
        </div>

<<<<<<< HEAD
=======
        <!--begin contact-->
        <a name="contact-anchor"></a>
        <div class="base-bg">
            <article class="type-system-geometric" id="contact">
                <div class="row">
                    <h2>Contact</h2>
                </div>
                <div class="row-contact">
                    <form action="contact_me.php" method="post" name="contact_form" id="contact_form" onSubmit="submitForm(this)" enctype=”multipart/form-data”>
                        <label for="name">Name:</label>
                        <div style="clear:both"></div>
                        <input type="text" name="name" id="name" placeholder="Your Full Name" required><br>
                        <label for="email">Email Address:</label>
                        <div style="clear:both"></div>
                        <input type="email" name="email" id="email" placeholder="yourname@example.com" required><br>
                        <label for="phone">Phone Number:</label>
                        <div style="clear:both"></div>
                        <input type="tel" name="phone" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="555-555-5555" required><br>
                        <div style="clear:both"></div>
                        <label for="message">Message:</label>
                        <div style="clear:both"></div>
                        <textarea name="message" id="message" placeholder="Your message here" required></textarea>
                        <br>
                        <button type="submit" class="btn btn-default" id="submit" name="btnSubmit" value="submit">Submit</button>
                        <br><br>
                    </form>
                </div>
            </article>
        </div>
>>>>>>> f8626e62c4c96d4e5863be9212b8502adddf517b

        <!--Begin Modal Content-->
        <!--Modal 1-->
        <div class="modal">
            <input class="modal-state" id="modal-1" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-1"></div>
                    <h1>Online Deer Registration Website</h1>
                    <p class="modal-intro">The Online Deer Registration website is a mock-up site that allows deer hunters to register their deer online. The website
                        contains an AngularJS form that collects the user's input and uploads them to an online database. The form uses validation
                        to ensure all fields are properly filled out before submitting.</p>
                    <img class="modal-img" src="images/webDeer.JPG" alt="">
                    <p class="modal-content">The History page allows you to view all records in the database. You can also filter the results using the search function,
                        and watch the results table update in real time.</p>
                    <form class="project-link" action="http://kevinjackswi.com/projects/web-deer-registration/index.html#/">
                        <input type="submit" class="btn btn-default" name="btnSubmit" value="View Project Website">
                    </form>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>December 2015</strong><br> Built Using: <strong>PHP, JavaScript, MySQL, Bootstrap, AngularJS, AJAX</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 2-->
        <div class="modal">
            <input class="modal-state" id="modal-2" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-2"></div>
                    <h1>Deer Hunting License Android App</h1>
                    <p class="modal-intro">The Deer Hunting License App for Android is a mock-up application that allows users to purchase a deer hunting license.
                        Users are introduced by a splash screen, then presented with a grid-view menu.</p>
                    <img class="modal-img" src="images/androidDeer.JPG" alt="">
                    <p class="modal-content">The license form allows users to select their criteria. The application sets the proper price based on user inputs.
                        When the 'Purchase' button is selected, the user is presented with a confirmation. License information is stored in
                        Shared Preferences. The Current License activity pulls the information from Shared Preferences and displays the information.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-181 (Mobile Application Development)</strong><br> Date: <strong>December 2015</strong><br> Built
                        Using: <strong>Java, Android Studio</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 3-->
        <div class="modal">
            <input class="modal-state" id="modal-3" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-3"></div>
                    <h1>Grocery List Application</h1>
                    <p class="modal-intro">The Grocery List is a desktop application that allows users to create, read, update, and delete data on a database.
                        Users can keep track of the groceries that they need to buy, as well as key information such as size and quantity.</p>
                    <img class="modal-img" src="images/shoppingList.JPG" alt="">
                    <p class="modal-content">This application was written in Java and created using Netbeans. It uses embedded SQL statements to interact with a
                        local Derby database which retains the information between runs.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-140 (Programming with Java)</strong><br> Date: <strong>May 2015</strong><br> Built Using: <strong>Java, CRUD Application, Derby Database</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 4-->
        <div class="modal">
            <input class="modal-state" id="modal-4" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-4"></div>
                    <h1>Gaming Group Website</h1>
                    <p class="modal-intro">The Gaming Group Website is a mock-up site that was created to act as a central hub for a group of gaming friends. The
                        website provides information on the group and its members, provides screenshots and videos of the games they play,
                        and scheduling information.</p>
                    <img class="modal-img" src="images/gamerGroup.PNG" alt="">
                    <p class="modal-content">This was the first complete website I created, created as part of a semester project. Except for the jQuery libraries
                        used, it was all hand coded. The page brings together many advanced HTML features and utilizes JavaScript and jQuery.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-160 (Web Programming with Scripts)</strong><br> Date: <strong>December 2014</strong><br> Built
                        Using: <strong>HTML5, CSS, JavaScript, jQuery</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 5-->
        <div class="modal">
            <input class="modal-state" id="modal-5" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-5"></div>
                    <h1>Space-Themed Trivia Game</h1>
                    <p class="modal-intro">The Space-Themed Trivia Game is just what it sounds like - a trivia game that you can play to test your knowledge of
                        space and the solar system! Test your wits and see how you score against your friends.</p>
                    <img class="modal-img" src="images/trivia.PNG" alt="">
                    <p class="modal-content">The Trivia Game was one of the first GUI programs I created. Written in C# for the desktop, the program reads a series
                        of questions from a text file and saves them in an array. It keeps track of your score and informs you of the correct
                        answer if you are wrong.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-115 (Intermediate Object-Oriented Programming)</strong><br> Date: <strong>December 2014</strong><br>						Built Using: <strong>C#, flat file database</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 6-->
        <div class="modal">
            <input class="modal-state" id="modal-6" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-6"></div>
                    <h1>Halloween eCommerce Site</h1>
                    <p class="modal-intro">The Halloween eCommerce Site is a mock-up online store.  Browse the available products, add items to your cart, and check out once you are ready.</p>
                    <img class="modal-img" src="#" alt="">
                    <p class="modal-content">This website has two versions: one built on PHP and one built on ASP.NET.  The information is stored in a MySQL database.  All the product information is being accessed from the database and presented to the user.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>May 2016</strong><br> Built Using: <strong>PHP, ASP.NET, MySQL</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 7-->
        <div class="modal">
            <input class="modal-state" id="modal-7" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-7"></div>
                    <h1>Baby Toys eCommerce Site</h1>
                    <p class="modal-intro">The Baby Toys eCommerce Site is a mock-up online store that allows you to browse products, check recall information, and contact the store. </p>
                    <img class="modal-img" src="#" alt="">
                    <form class="project-link" action="http://kevinjackswi.com/projects/baby-toys/">
                        <input type="submit" class="btn btn-default" name="btnSubmit" value="View Project Website">
                    </form>           
                    <p class="modal-content">The website was built to showcase how a responsive site can be created using Bootstrap.  It will scale well to any size device, from a large desktop monitor to a smartphone device.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>November 2106</strong><br> Built Using: <strong>HTML, CSS, Bootstrap</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 8-->
        <div class="modal">
            <input class="modal-state" id="modal-8" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-8"></div>
                    <h1>Email has been sent! Validation = <?=$validation?></h1>
                    <!--<p class="modal-intro">Data has been processed.</p>          
                    <p class="modal-content">Data has been processed.</p>-->
                    <!--<p class="modal-footer">
                        Footer Material
                    </p>-->
                </div>
            </div>
        </div>        
        <!--End Modal Content-->

<<<<<<< HEAD

        <!-- begin footer -->
        <!--<div class="wrapper-for-content-outside-of-footer">
        Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
        </div>-->
        <footer class="footer-2" role="contentinfo">
            <!--<p>Kevin Jacks - VICOM-126<br>MATC Fall 2016</p>-->
            <ul>
                <li><a href="#about-anchor">About</a></li>
                <li><a href="#portfolio-anchor">Portfolio</a></li>
                <li><a href="#skills-anchor">Skills</a></li>
                <li><a href="#contact-anchor">Contact</a></li>
            </ul>
            <div class="footer-secondary-links">
                <ul class="footer-social">
                    <li>
                        <a href="https://github.com/jacksofclubs">
                            <i class="fa fa-github-square fa-footer" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/kevin-jacks-96013a97">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <!--validation confirmation-->
        <?php
            $validation = "";
            if (isset($_GET['validation'])) {
                $validation = $_GET['validation'];
                echo "<script> $('#modal-8').prop('checked',true); </script>";
                // <script> $("#modal-8").prop("checked",true); </script>
            }
            // echo ("Validation result is: $validation");
        ?>        
        <!--<script> $("#modal-8").prop("checked",true); </script>-->
     
</body>

=======
        <!--Begin Modal Content-->
        <!--Modal 1-->
        <div class="modal">
            <input class="modal-state" id="modal-1" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-1"></div>
                    <h1>Online Deer Registration Website</h1>
                    <p class="modal-intro">The Online Deer Registration website is a mock-up site that allows deer hunters to register their deer online. The website
                        contains an AngularJS form that collects the user's input and uploads them to an online database. The form uses validation
                        to ensure all fields are properly filled out before submitting.</p>
                    <img class="modal-img" src="images/webDeer.JPG" alt="">
                    <p class="modal-content">The History page allows you to view all records in the database. You can also filter the results using the search function,
                        and watch the results table update in real time.</p>
                    <a href="http://kevinjackswi.com/projects/web-deer-registration/index.html#/">View Project Website</a>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>December 2015</strong><br> Built Using: <strong>PHP, JavaScript, MySQL, Bootstrap, AngularJS, AJAX</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 2-->
        <div class="modal">
            <input class="modal-state" id="modal-2" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-2"></div>
                    <h1>Deer Hunting License Android App</h1>
                    <p class="modal-intro">The Deer Hunting License App for Android is a mock-up application that allows users to purchase a deer hunting license.
                        Users are introduced by a splash screen, then presented with a grid-view menu.</p>
                    <img class="modal-img" src="images/androidDeer.JPG" alt="">
                    <p class="modal-content">The license form allows users to select their criteria. The application sets the proper price based on user inputs.
                        When the 'Purchase' button is selected, the user is presented with a confirmation. License information is stored in
                        Shared Preferences. The Current License activity pulls the information from Shared Preferences and displays the information.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-181 (Mobile Application Development)</strong><br> Date: <strong>December 2015</strong><br> Built
                        Using: <strong>Java, Android Studio</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 3-->
        <div class="modal">
            <input class="modal-state" id="modal-3" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-3"></div>
                    <h1>Grocery List Application</h1>
                    <p class="modal-intro">The Grocery List is a desktop application that allows users to create, read, update, and delete data on a database.
                        Users can keep track of the groceries that they need to buy, as well as key information such as size and quantity.</p>
                    <img class="modal-img" src="images/shoppingList.JPG" alt="">
                    <p class="modal-content">This application was written in Java and created using Netbeans. It uses embedded SQL statements to interact with a
                        local Derby database which retains the information between runs.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-140 (Programming with Java)</strong><br> Date: <strong>May 2015</strong><br> Built Using: <strong>Java, CRUD Application, Derby Database</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 4-->
        <div class="modal">
            <input class="modal-state" id="modal-4" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-4"></div>
                    <h1>Gaming Group Website</h1>
                    <p class="modal-intro">The Gaming Group Website is a mock-up site that was created to act as a central hub for a group of gaming friends. The
                        website provides information on the group and its members, provides screenshots and videos of the games they play,
                        and scheduling information.</p>
                    <img class="modal-img" src="images/gamerGroup.PNG" alt="">
                    <p class="modal-content">This was the first complete website I created, created as part of a semester project. Except for the jQuery libraries
                        used, it was all hand coded. The page brings together many advanced HTML features and utilizes JavaScript and jQuery.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-160 (Web Programming with Scripts)</strong><br> Date: <strong>December 2014</strong><br> Built
                        Using: <strong>HTML5, CSS, JavaScript, jQuery</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 5-->
        <div class="modal">
            <input class="modal-state" id="modal-5" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-5"></div>
                    <h1>Space-Themed Trivia Game</h1>
                    <p class="modal-intro">The Space-Themed Trivia Game is just what it sounds like - a trivia game that you can play to test your knowledge of
                        space and the solar system! Test your wits and see how you score against your friends.</p>
                    <img class="modal-img" src="images/trivia.PNG" alt="">
                    <p class="modal-content">The Trivia Game was one of the first GUI programs I created. Written in C# for the desktop, the program reads a series
                        of questions from a text file and saves them in an array. It keeps track of your score and informs you of the correct
                        answer if you are wrong.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-115 (Intermediate Object-Oriented Programming)</strong><br> Date: <strong>December 2014</strong><br>						Built Using: <strong>C#, flat file database</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 6-->
        <div class="modal">
            <input class="modal-state" id="modal-6" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-6"></div>
                    <h1>Halloween eCommerce Site</h1>
                    <p class="modal-intro">The Halloween eCommerce Site is a mock-up online store.  Browse the available products, add items to your cart, and check out once you are ready.</p>
                    <img class="modal-img" src="#" alt="">
                    <p class="modal-content">This website has two versions: one built on PHP and one built on ASP.NET.  The information is stored in a MySQL database.  All the product information is being accessed from the database and presented to the user.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>May 2016</strong><br> Built Using: <strong>PHP, ASP.NET, MySQL</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--Modal 7-->
        <div class="modal">
            <input class="modal-state" id="modal-7" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <div class="modal-close" for="modal-7"></div>
                    <h1>Baby Toys eCommerce Site</h1>
                    <p class="modal-intro">The Baby Toys eCommerce Site is a mock-up online store that allows you to browse products, check recall information, and contact the store. </p>
                    <img class="modal-img" src="#" alt="">
                    <a href="http://kevinjackswi.com/projects/baby-toys/">View Project Website</a>
                    <p class="modal-content">The website was built to showcase how a responsive site can be created using Bootstrap.  It will scale well to any size device, from a large desktop monitor to a smartphone device.</p>
                    <p class="modal-footer">
                        Class: <strong>ITDEV-161 (Web Programming 1)</strong><br> Date: <strong>November 2106</strong><br> Built Using: <strong>HTML, CSS, Bootstrap</strong>
                    </p>
                </div>
            </div>
        </div>
        <!--End Modal Content-->


        <!-- begin footer -->
        <!--<div class="wrapper-for-content-outside-of-footer">
        Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
        </div>-->
        <footer class="footer-2" role="contentinfo">
            <!--<p>Kevin Jacks - VICOM-126<br>MATC Fall 2016</p>-->
            <ul>
                <li><a href="#about-anchor">About</a></li>
                <li><a href="#portfolio-anchor">Portfolio</a></li>
                <li><a href="#skills-anchor">Skills</a></li>
                <li><a href="#contact-anchor">Contact</a></li>
            </ul>
            <div class="footer-secondary-links">
                <ul class="footer-social">
                    <li>
                        <a href="https://github.com/jacksofclubs">
                            <i class="fa fa-github-square fa-footer" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/kevin-jacks-96013a97">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

</body>

>>>>>>> f8626e62c4c96d4e5863be9212b8502adddf517b
</html>