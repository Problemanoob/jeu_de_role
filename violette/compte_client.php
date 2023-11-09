<?
	session_start();
	$id_session = session_id();

    $value = 15;
    setrawcookie("cookie_AFK", $value, time()+5, "/", "", true, true);
    echo $_COOKIE["cookie_AFK"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin: 10px 0;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="connexion.php" method="post">
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur :</label>
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe :</label>
                <input type="mdp" id="mdp" name="mdp" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>