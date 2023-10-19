<?
session_start();
$id_session = session_id();
echo ($_SESSION['utilisateur']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mon Catalogue de Produits</title>
</head>
<body>
    <h1>Catalogue de Produits</h1>
    <div class="catalog">
        <div class="product">
            <img src="product1.jpg" alt="Produit 1">
            <h2>Produit 1</h2>
            <p>Description du produit 1.</p>
            <p>Prix : $19.99</p>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Produit 2">
            <h2>Produit 2</h2>
            <p>Description du produit 2.</p>
            <p>Prix : $24.99</p>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Produit 3">
            <h2>Produit 3</h2>
            <p>Description du produit 3.</p>
            <p>Prix : $14.99</p>
        </div>
    </div>
</body>
</html>