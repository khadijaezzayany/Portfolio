<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>portfolio khadija Ezzayany</title>
</head>

<body>
    <!--------------------------------Header------------------------------>
    <div class="header" id="header">
        <?php  include "navbar.php";  ?>
        <div class=" header__section">
            <h1 class="header__section--h1"> Hello <br> My name is <br> Khadija</h1>

            <p class=" header__section--p">
                <img id="top" src=" assets/quote.png" alt="">
                I am a web integrator, web designer, <br> and freelance web designer in Agadir. <br>
                Welcome to my portfolio!
                <img id="bot" src="assets/quote.png" alt="">
            </p>

            <a href="#">See My Work</a>

        </div>


    </div>
    <!--------------------------------Fin Header------------------------------>


    <!--------------------------------About------------------------------>
    <div class="about" id="about">


        <h1 class="about__h1"> About Me</h1>
        <p class="about__p">I'm coding with passion and love</p>

        <div class="about__container">
            <div class="about__container--left">
                <img id="khadija" src=" assets/khadija.jpg" alt="">
            </div>
            <div class="about__container--right">
                <p class="about__container--right">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nostrum similique, dolorum delectus
                    facere eligendi consectetur vel quam optio veritatis sunt quo, magnam architecto ut ipsam temporibus
                    fuga odio repellendus?
                </p>
                <!-- <div class="about__container--right icon "> -->
                <ul>
                    <li> <i class="fa fa-envelope" aria-hidden="true"></i></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                    <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    <li> <i class="fa fa-github" aria-hidden="true"></i></li>
                </ul>
                <!-- </div> -->
                <!-- <br> -->
                <a href="#" class="about__container--right but">Let's Start Your Project</a>
            </div>
        </div>

    </div>

    <!--------------------------------Fin About------------------------------>



    <!--------------------------------Portfolio------------------------------>


    <div class="portfolio" id="portfolio">
        <h1 class="portfolio__h1"> Potfolio</h1>
        <p class="portfolio__p">Here are someof my work </p>

        <div class="portfolio__card ">
            <div class="portfolio__card--left">
                <img class="coverProjects" src="assets/coverCorona.png" alt="">
            </div>
            <div class="portfolio__card--right">
                <h1 class="portfolio__card--right">Covid Test website</h1>
                <p class="portfolio__card--right"> Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.
                    Nulla,
                    excepturi iste.</p>
                <h2 class="portfolio__card--right">GitHub:</h2>
                <a class="projects__github" href="">https://github.com/khadijaezzayany/corona-projet</a>
                <a class="projects__website" href="">Visit site</a>
            </div>
        </div>


        <div class="portfolio__card">
            <div class="portfolio__card--left">
                <img class="coverProjects" src="assets/coverYouweb.jpg" alt="">
            </div>
            <div class="portfolio__card--right">
                <h1 class="portfolio__card--right">Youweb Agency website</h1>
                <p class="portfolio__card--right"> Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.
                    Nulla,
                    excepturi iste.</p>
                <h2 class="portfolio__card--right">GitHub:</h2>
                <a class="projects__github" href="">https://github.com/khadijaezzayany/corona-projet</a>
                <a class="projects__website" href="">Visit site</a>
            </div>
        </div>


        <div class="portfolio__card">
            <div class="portfolio__card--left">
                <img class="coverProjects" src="assets/coverKolna.png" alt="">
            </div>
            <div class="portfolio__card--right">
                <h1 class="portfolio__card--right">Kolna Explorer website</h1>
                <p class="portfolio__card--right"> Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.
                    Nulla,
                    excepturi iste.</p>
                <h2 class="portfolio__card--right">GitHub:</h2>
                <a class="projects__github" href="">https://github.com/khadijaezzayany/corona-projet</a>
                <a class="projects__website" href="">Visit site</a>
            </div>
        </div>


    </div>
    <!-------------------------------Fin Portfolio------------------------------>



    <!--------------------------------Contact------------------------------>
    <div class=" contact" id="contact">
        <div class="contact__left">
            <p class="contact__left--p">Interested in working together? <br>
                Feel free to contact me for any <br> project or collaboration.</p>
            <h1 class="contact__left--h1"> Khadija Ezzayany</h1>
            <div class="contact__left--icon">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a class="emailA" href="mailto:kezzayany@gmail.com"> hraf.kezzayany@gmail.com</a>
                <br>
                <i class=" fa fa-phone" aria-hidden="true"></i>
                <a href="tel:+212 689476970">+212 689476970</a>
                <br>

                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Agadir - Morocco</span>
            </div>
        </div>

        <div class="contact__right">
            <h1 class="contact__right--h1">Countact</h1>
            <form action="">
                <input type="text" id="fname" name="name" placeholder="Full name" required>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                <textarea id="message" name="message" placeholder="Message" required></textarea>
                <input id="send" type="submit" value="Send" name="submit">
            </form>
        </div>

    </div>

    <!--------------------------------Fin Contact------------------------------>



    <!--------------------------------CopyRight------------------------------>
    <div class="copyright">
        <p>Copyright Khadija Creative 2020</p>
    </div>




    <script src="script.js"></script>
</body>

</html>