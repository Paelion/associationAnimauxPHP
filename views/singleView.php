<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../views/indexView.php">Notre association </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/newView.php">Animaux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/modifyView.php">Produits</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../views/singleView.php">Faire un don</a>
            </li>
        </ul>
    </div>
</nav>

<div class="affichage mt-5 justify-content-around">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $animal->nom ?></h5>
            <div class="card-text">
                <p>Type: <?= $animal->type ?></p>
                <p>Race: <?= $animal->race ?></p>
                <p>Taille: <?= $animal->taille ?>cm</p>
                <p>Poid: <?= $animal->poid ?>kg</p>
                <p>Age: <?= $animal->age ?>an(s)</p>
            </div>
            <a href="../public/index.php?page=modify&id=<?= $animal->id ?>" class="btn btn-primary">Modifier</a>
            <a href="../public/index.php?page=delete&id=<?= $animal->id ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>

</body>
</html>
