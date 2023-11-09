<?
$pdo = new PDO("mysql:host=CRLRMPC-K2FG3OF\SQLEXPRESS;dbname=TP7", 'sa', 'btssio32');
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
return $pdo;

 $procedure = $pdo->prepare("CREATE PROCEDURE sp_TP7_ajout_utilisateur
 @nom varchar(50),
 @prenom varchar(50),
 @date_naissance date,
 @email varchar(100),
 @ville varchar(50),
 @code_postal int,
 @chemin varchar(50)
AS
BEGIN
INSERT INTO Adresse (Ville,Chemin,Code_postal) VALUES (@ville,@chemin,@code_postal);
INSERT INTO Client (Id_Client,Nom,Prénom,Date_naissance,Email) VALUES (@@IDENTITY,@nom,@prenom,@date_naissance,@email);
END");
$return = $procedure->execute([
    ':Ville' => $_POST['ville'],
    ':Chemin' => $_POST['chemin'],
    ':Code_postal' => $_POST['code_postal'],
    ':Nom' => $_POST['nom'],
    ':Prenom' => $_POST['prenom'],
    ':Date_naissance' => $_POST['date_naissance'],
    ':Email' => $_POST['email']
]);
?>