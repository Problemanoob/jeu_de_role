<?
session_start();
$id_session = session_id();
$utilisateur_saisi = $_POST['nom_utilisateur'];
$mot_de_passe_saisi = $_POST['mdp'];
$_SESSION['utilisateur'] = $utilisateur_saisi;
$_SESSION['mdp'] = $mot_de_passe_saisi;

if ($_SESSION['utilisateur'] == "admin" && $_SESSION['mdp'] == "admin1234"){
    header("Location: administration.php");
}
else{
    header("Location: catalogue.php");
}
?>