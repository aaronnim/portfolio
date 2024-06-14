<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aaron Nim Portfolio</title>
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <?php
    $smallphrase1 = "Get to know more about my approach, process, services and way of working. See some of my projects as well while you're at it.";

    $motto1 = "The best results come from websites that are easy to use, show the user what they want to see and delight them. By analysing your current situation and defining your business goals we’ll design a website that is not only beautiful but also converts. ";
    $motto2 = "Defining the business goal and strategic direction.
        Everything starts by getting clarity around what we are trying to achieve. What should the website’s main goal be? What does project succes mean for your business? Where will the business be in 3 years? These are just some questions which we’ll work together on to define the best path forward when it comes to your digital needs";

    $desc1 = "If you already have a visual identity in place we’ll continue into the visual design. If not yet defined I’ll go into art direction when the homepage is designed. Websites always get designed for desktop and mobile.</p>";
    $desc2 = "Here we define how things will move and interact. Think page transitions, pageload animations, button hovers, scroll animations and so on. This is all done with the strategic direction of your brand in mind";
    $desc3 = "We’ll have a look at what content should be on the site, which shouldn’t and what goes on which page. By thinking about the structure in user funnels we’ll define a path for the user towards conversion.";
    ?>
    <nav>
        <div class="logo">
            <h1>NIM</h1>
        </div>
        <div class="cool-spiel">
            <h3><a href="https://mail.google.com">nimaaron051002@gmail.com</a></h3>
        </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
        </ul>
    </nav>
    <section class="home" id="home">
        <div class="catching-phrase">
            <h1>THE FRONT-END WEBSITE DEVELOPER YOU NEED</h1>
            <div class="small-phrase">
                <h3><?php echo $smallphrase1; ?></h3>
            </div>
        </div>
        <div class="phrase">
            <div class="phrase-wrapper">
                <div class="phrase-container">
                    <div class="number">
                        <p>(001)</p>
                    </div>
                    <div class="motto">
                        <p><?php echo $motto1; ?></p>
                    </div>
                </div>
                <div class="phrase-container">
                    <div class="number">
                        <p>(002)</p>
                    </div>
                    <div class="motto">
                        <p><?php echo $motto2; ?></p>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="about" id="about">
        <div class="about-content-container">
            <div class="about-skills">
                <div class="skills_title">
                    <h1>SKILLS</h1>
                </div>
                <div class="skills_content_container">
                    <img src="SS.png" alt="">
                </div>
            </div>
            <div class="intro-container">
                <div class="services-h1">
                    <h1>SERVICES</h1>
                </div>
                <div class="serv-1">
                    <div class="num">
                        <p>01.</p>
                    </div>
                    <div class="title">
                        <h1>Web design</h1>
                    </div>
                    <div class="desc">
                        <p><?php echo $desc1; ?></p>
                    </div>
                </div>
                <div class="serv-1">
                    <div class="num">
                        <p>02.</p>
                    </div>
                    <div class="title">
                        <h1>Animation/interaction</h1>
                    </div>
                    <div class="desc">
                        <p><?php echo $desc2; ?></p>
                    </div>
                </div>
                <div class="serv-1">
                    <div class="num">
                        <p>03.</p>
                    </div>
                    <div class="title">
                        <h1>Information Architecture</h1>
                    </div>
                    <div class="desc">
                        <p><?php echo $desc3 ?></p>
                    </div>
                </div>
            </div>
            <div class="photos-container">
                <div class="photos-title-spiel">
                    <h1>OUTSIDE ME</h1>
                    <h3 class="about-intro-name">Hi! I am
                        <?php $firstName = "Aaron";
                        $lastName = "Nim";;
                        echo $firstName, " ", $lastName;
                        ?>, have a look at what I am outside.
                    </h3>
                </div>

                <div class="photos-container">
                    <div class="photo 1"><img src="me.jpg" alt="" height="200"></div>
                    <div class="photo 2"><img src="me1.jpeg" alt="" height="200"></div>
                    <div class="photo 3"><img src="me2.jpeg" alt="" height="200"></div>
                    <div class="photo 4"><img src="me3.jpeg" alt="" height="200"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="projects">

        <div class="my-websites">
            <h1>MY PROJECTS</h1>
            <iframe src="https://pracils.firebaseapp.com/" frameborder="0"></iframe>
            <iframe src="https://klik-app-001.firebaseapp.com/" frameborder="0"></iframe>
        </div>
    </section>
    <p class="gbtt"><a href="#home">Go back to top &#8593;</a></p>
</body>

</html>