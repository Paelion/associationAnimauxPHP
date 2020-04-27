
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="../public/index.php?page=home">Notre association </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=animaux">Animaux</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../public/index.php?page=product">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=dons">Faire un don</a>
            </li>
        </ul>
    </div>
</nav>

<div class="affichage mt-5 justify-content-around">
    <h1>Page produit</h1>


    <?php foreach ($products as $product) : ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $product->nom ?></h5>
                <div class="card-text">
                    <p>Type: <?= $product->type ?></p>
                    <p>Animal: <?= $product->animal ?></p>
                    <p>Prix: <?= $product->prix ?>€</p>
                    <p>Stock: <?= $product->stock ?></p>

                </div>
                <a href="index.php?page=singleProduct&id=<?= $product->id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>
</div>

</body>
</html>
