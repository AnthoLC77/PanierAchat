<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <title>Mon panier</title>
</head>

<body>
    <div id="container">
        <h1>Mon panier d'achat</h1>
        <div id="panier">
            <h2>Panier d'achat :</h2>
            <div class="send">
                <?php
                    session_start();
                    if (!empty($_SESSION["send"])) {
                        foreach($_SESSION["send"] as $key => $product) {
                            echo "<li>$product<a class='delete' href='shopping_cart.php?remove=$key'>Supprimer</a></li>";
                        }
                    } else {
                        echo "Aucun article dans le panier";
                    }   
                ?>
            </div>
        </div>
        <div id="list-card-items">
            
            <div class="card-items">
                <img src="ressource/bloodborne.jpg" alt="image bloodborne">
                <div class="card-items-infos">
                    <h3>Bloodborne</h3>
                    <p>Jeu PS4</p>
                    <span>50 euros</span>
                </div>
                <form action="shopping_cart.php" method="post">
                    <input type="hidden" name="product" value="Bloodborne">
                    <input type="submit" name="add_to_cart" value="Ajouter au panier">
                </form>
            </div>
            <div class="card-items">
                <img src="ressource/red-dead-2.jpg" alt="image bloodborne">
                <div class="card-items-infos">
                    <h3>Red Dead Redemption 2</h3>
                    <p>Jeu Ps4</p>
                    <span>39.99 euros</span>
                </div>
                <form action="shopping_cart.php" method="post" >
                    <input type="hidden" name="product" value="Red Dead Redemption2">
                    <input type="submit" name="add_to_cart" value="Ajouter au panier">
                </form>
            </div>
            <div class="card-items">
                <img src="ressource/marvel-s-spider-man-2-ps5.jpg" alt="" >
                <div class="card-items-infos">
                    <h3>Spider man 2</h3>
                    <p>Jeu Ps5</p>
                    <span>70 euros</span>
                </div>
                <form action="shopping_cart.php" method="post" >
                    <input type="hidden" name="product" value="Spider-man2">
                    <input type="submit" name="add_to_cart" value="Ajouter au panier">
                </form>
            </div>
            </div>
    </div>
</body>

</html>