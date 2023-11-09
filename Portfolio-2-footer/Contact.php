<!DOCTYPE html>
<html>
<link rel="Stylesheet" href="Contact.css">

<body>


    <nav class="main-menu">
        <ul>
            <li>
                <a href="Accueil.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Accueil
                    </span>
                </a>

            </li>

            <li class="has-subnav">
                <a href="Contact.php">
                    <i class="fa fa-comments fa-2x"></i>
                    <span class="nav-text">
                        Contact
                    </span>
                </a>


        </ul>
    </nav>

        <form method="get">
            <input name="name" type="text" class="feedback-input" placeholder="Nom" autocomplete="off" />
            <input name="email" type="text" class="feedback-input" placeholder="Email" autocomplete="off" />
            <textarea name="text" class="feedback-input" placeholder="Contenu" autocomplete="off"></textarea>
            <input type="submit" value="SUBMIT" />
        </form>

</body>

</html>