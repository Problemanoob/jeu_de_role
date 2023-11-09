<script>
    import 'animate.css';
</script>
<!DOCTYPE html>
<html>

<head>
    <link rel="Stylesheet" href="Accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta charset="utf-8">
    <title>Portfolio Accueil</title>
</head>


<header>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <div class="custom-shape-divider-bottom-1679297948">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>

    </div>

</header>

<body>

    <nav class="main-menu">
        <ul class="nav">
            <li class="field">
                <a class="page" href="Accueil.php">
                    <i class="icons fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Accueil
                    </span>
                </a>
            </li>
            <li class="field has-subnav">
                <a class="page" href="Contact.php">
                    <i class="icons fa fa-comments fa-2x"></i>
                    <span class="nav-text">
                        Contact
                    </span>
                </a>


        </ul>


    </nav>
    <div class="Container">
        <div class="Title">
            <p class="animate__animated animate__fadeInUp h1">Bienvenue sur mon Portfolio</p>
        </div>
    </div>
</body>

<div class="kietil">
    <h2>Présentation</h2>
    <div class="conteneur">
        <p id="Pres">Je m'appelle Lucas PRADEL je suis actuellement en deuxième année de BTS SIO SLAM.</br>
            Au cours de ce BTS j'ai pu développer mes compétences en développement web et applicatif nottament sur les langages suivants:</br></p>
        <div class="banner"> <img id="ban" src="banner-g4220a4abd_1280.png">
            <div class="lang"><img id="Lan" src="HTML.png" />
                <p id="under">CONFIRMÉ</p>
            </div>
            <div class="lang"><img id="Lan" src="CSS.png" />
                <p id="under">CONFIRMÉ</p>
            </div>
            <div class="lang"><img id="Lanz" src="PHP.png" />
                <p id="under">INTERMEDIAIRE</p>
            </div>
            <div class="lang"><img id="Lanz" src="Java.png" />
                <p id="under">INTERMEDIAIRE</p>
            </div>
            <div class="lang"><img id="Lanz" src="C.png" />
                <p id="under">AMATEUR</p>
            </div>
            <div class="lang"><img id="Lanz" src="SQL.png" />
                <p id="under">AMATEUR</p>
            </div>
        </div>
        <p id="Appren">J'ai soif d'apprentissage, je m'intéresse beaucoup aux langages que je ne connais pas comme le SASS ou encore le SCSS</br>
            J'approfondis aussi les langages que j'ai peu vus comme le JavaScript</p>
    </div>
</div>

<main>
    <h3>Parcours</h3>
    <div class="pdf">
        <div class="Bloc">
            <img id="pdf" src="SEO.png" />
            <p id="Desc">Travail personnel sur le référencement naturel de GOOGLE</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="Cisco.png" />
            <p id="Desc">Utilisation de Cisco Packet Tracer pour le routage de postes</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="Ubuntu.png" />
            <p id="Desc">Installation et configuration d'un système Ubuntu sur une machine virtuelle</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="Windows.png" />
            <p id="Desc">Installation et configuration d'un système Windows sur une machine virtuelle </br> gestion de la sécurité, des groupes et des partages de fichiers</p>
        </div>
        <div class="clearfix"></div>
        <div class="Bloc">
            <img id="pdf" src="Serveur LAMP.png" />
            <p id="Desc">Configuration d'un Serveur LAMP et utilisation de GLPI pour le ticketing sur un système Debian sur une machine virtuelle</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="Serveur Debian.png" />
            <p id="Desc">Installation et configuration d'un Serveur Debian sur une machine virtuelle</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="Windows server.png" />
            <p id="Desc">Configuration d'un Serveur Windows sur une machine virtuelle</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="PPE1.png" />
            <p id="Desc">Projet de groupe sur l'étude de CMS pour une agence de voyage tels que Wordpress ou encore Shopify</p>
        </div>
        <div class="clearfix"></div>
        <div class="Bloc">
            <img id="pdf" src="PPE2.png" />
            <p id="Desc">Projet de groupe sur la création d'un site internet pour l'amicale Laïque de Lectoure</p>
        </div>

        <div class="Bloc">
            <img id="pdf" src="PPE3.png" />
            <p id="Desc">Projet de groupe sur la création d'un site intranet de gestion des retours clients d'une agence de voyage</p>
        </div>
    </div>
</main>

<footer>
    <h4>Retrouvez moi sur les réseaux</br></h4>
    <ul class="social">
        <li class="media">
            <a class="social-icon facebook" href="https://www.facebook.com/profile.php?id=100009364535935">
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <i class="network fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li class="media">
            <a class="social-icon twitter" href="https://twitter.com/pradel_lucas">
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <i class="network fa fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li class="media">
            <a class="social-icon instagram" href="https://www.instagram.com/lucas_pradel65/?hl=fr">
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <span class="col"></span>
                <i class="network fa fa-instagram" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</footer>
</body>

</html>
