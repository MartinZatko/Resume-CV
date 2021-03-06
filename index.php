<?php
include 'config.php';

//phpinfo();
?>
<!DOCTYPE html>

<html lang="sk_SK">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Životopis Martina Zaťka</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="http://resumezatko.jednoduse.cz/css/style.css">

</head>

<body>

    <!-- header section starts / Začiatok sekcie hlavičky -->

    <header>

        <div class="user">
            <img src="http://resumezatko.jednoduse.cz/images/ProfilePicture.jpg" alt="">
            <h3 class="name">Martin Zaťko</h3>
            <p class="post">Budúci Front end Developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Domov</a></li>
                <li><a href="#about">O mne</a></li>
                <li><a href="#education">Vzdelanie</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends / Koniec sekcie hlavičky -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts / Začiatok sekcie domov -->

    <section class="home" id="home">

        <h3>Ahoj !</h3>
        <h1>Ja som <span>Martin Zaťko </span></h1>
        <p>Predstavujem vám svoj životopis.
        </p>
        <a href="#about"><button class="btn">Tu je niečo o mne <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends / Koniec sekcie domov-->

    <!-- about section starts / Začiatok sekcie O mne -->

    <section class="about" id="about">

        <h1 class="heading"> O<span> mne</span></h1>

        <div class="row">

            <div class="info">
                <h3> <span> Meno : </span> Martin Zaťko</h3>
                <h3> <span> Vek : </span> 24 </h3>
                <h3> <span> Qualifikácia : </span> Mechatronik / Elektrotechnik </h3>
                <h3> <span> Aktuálna pozícia : </span> Údržbár </h3>
                <h3> <span> Jazyk : </span> Slovenský, Anglický <span>(A1)</span>, Nemecký <span>(A2-B1)</span> </h3>
                <a href=" http://resumezatko.jednoduse.cz/documents/CV.pdf" download="CV.pdf"><button class="btn"> Stiahnuť CV <i class="fas fa-download"></i> </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>0-1</span>
                    <h3>Rok skúseností</h3>
                </div>

                <div class="box">
                    <span>1</span>
                    <h3>Projekt hotový</h3>
                </div>

                <div class="box">
                    <span>0+</span>
                    <h3>Šťastných klientov</h3>
                </div>

                <div class="box">
                    <span>0</span>
                    <h3>Získaných ocenení</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends / Koniec sekcie O mne -->

    <!-- education section starts / Začiatok sekcie vzdelanie -->

    <section class="education" id="education">

        <h1 class="heading"> Moje <span>vzdelanie</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2012-2016</span>
                <h3>Mechatronika</h3>
                <p>Vyštudoval som odbor Mechatronika na Strednej priemyselnej škole elektrotechnickej a strojníckej v Nitre. Tu som sa prvý krát stretol tvárov v tvár s programovaním.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016-2018</span>
                <h3>Robotika a kybernetika</h3>
                <p>Študoval som na Slovenskej technickej univerzite Fakulte elektrotechniky a informatiky v Bratislave. Štúdium som žiaľ nedokončil. Ale ja sa vrátim... !</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2017-2018</span>
                <h3>Webrebel 1: HTML, CSS & Javascript</h3>
                <p>Od roku 2017 som začal študovať ako samouk rôzne kurzy programovania, a najviac ma zaujala tvorba webstránok. Naučil som sa HTML, CSS, a čo to aj z JavaScriptu.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>SQL databázy: MySQL a SQLite</h3>
                <p>Absolvoval som online kurz SQL databázy: MySQL a SQLite na stránke Learn2Code. Samé INSERT,UPDATE, DELETE... </p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>Webrebel 2: PHP</h3>
                <p>Zaujali ma dynamické stránky a responzivita webu, preto som pokračoval vo vzdelávaní sa a absolvoval som kurz zameraní na PHP.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2021</span>
                <h3>Vzdelávam sa</h3>
                <p>Pokračujem vo vzdelávaní sa : GIT, GITHUB, frameworky pre PHP, CSS, JS, a snažím sa naučiť sa anglický jazyk...</p>
            </div>

        </div>

    </section>

    <!-- education section ends / Koniec sekcie vzdelanie -->

    <!-- portfolio section starts / Začiatok sekcie portfolio -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> Moje <span>projekty</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/projekt1.png" alt="">
                <a href="#"><button class="btn"> Stiahnuť CV <i class="fas fa-download"></i> </button></a>
            </div>

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/coming_soon.png" alt="">
            </div>

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/coming_soon.png" alt="">
            </div>

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/coming_soon.png" alt="">
            </div>

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/coming_soon.png" alt="">
            </div>

            <div class="box">
                <img src="http://resumezatko.jednoduse.cz/images/coming_soon.png" alt="">
            </div>

        </div>

    </section>

    <!-- portfolio section ends / Koniec sekcie portfolio-->

    <!-- contact section starts / Začiatok sekcie kontakt -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Kontaktujte</span> ma </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">Kontaktné info</h3>

                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> martinzatkoiz@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> +421 918 022 666</h3>
                    <!-- <h3> <i class="fas fa-phone"></i> +111-222-3333 </h3>-->
                    <h3> <i class="fas fa-map-marker-alt"></i> Slovenská Republika, Trnava 917 01, Okružná 17 </h3>
                </div>

            </div>

            <form action="mailsend.php" method="post" >

                <input type="text" name="name" placeholder="Meno" class="box">
                <input type="text" name="mail" placeholder="Email" class="box">
                <input type="text" name="subject" placeholder="Projekt" class="box">
                <textarea name="message" id="message" cols="30" rows="10" class="box message" placeholder="Správa"></textarea>
                <button type="submit" name="submit" class="btn" value="Odoslať"> Odoslať <i class="fas fa-paper-plane"></i> </button>

            </form>

        </div>

    </section>

    <!-- contact section ends / Koniec sekcie kontakt-->


    <!-- scroll top button / tlačidlo premiestnenia na začiatok -->

    <a href="#home" class="top">
        <img src="http://resumezatko.jednoduse.cz/images/scroll-top-img.png" alt="">
    </a>















    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="http://resumezatko.jednoduse.cz/js/script.js"></script>


</body>

</html>
