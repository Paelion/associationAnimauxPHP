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
                <a class="nav-link" href="">Notre association </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Animaux</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Faire un don</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container mt-5">
    <form action="../public/index.php?page=saveModification&id=<?= $animal->id ?>" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $animal->nom ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" value="<?= $animal->type ?>">
                <option value="1">Chien</option>
                <option value="2">Chat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="race">Race</label>
            <input type="text" class="form-control" id="race" name="race" value="<?= $animal->race ?>">
        </div>
        <div class="form-group">
            <label for="taille">Taille</label>
            <input type="number" class="form-control" id="taille" name="taille" value="<?= $animal->taille ?>">
        </div>
        <div class="form-group">
            <label for="poid">Poid</label>
            <input type="number" class="form-control" id="poid" name="poid" value="<?= $animal->poid ?>">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?= $animal->age ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>


</body>
</html>
