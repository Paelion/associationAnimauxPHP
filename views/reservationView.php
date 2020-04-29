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
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=home">Notre association </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=animaux">Animaux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=product">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/index.php?page=dons">Faire un don</a>
            </li>
        </ul>
    </div>
</nav>

<div>
    <div style=" display: flex; padding: 50px">
        <img src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h3>Réservation de <?= $animal->nom ?></h3>
            <div>
                <p>Type: <?= $animal->type ?></p>
                <p>Race: <?= $animal->race ?></p>
                <p>Taille: <?= $animal->taille ?>cm</p>
                <p>Poid: <?= $animal->poid ?>kg</p>
                <p>Age: <?= $animal->age ?>an(s)</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <form action="../reservation/reservationIndex.php" method="post">
        <div class="form-group mt-3">
            <label for="nom">Rappeler votre nom</label>
            <input class="form-control" type="text" name="nom">
        </div>
        <div class="form-group mt-3">
            <label for="nom">Rappeler le nom de l'animal</label>
             <input class="form-control" type="text" name="titre">
        </div>
        <div class="form-group mt-3" style="display: flex">
            <label for="date" style="margin: 10px 0">Séléctioner un jour :</label>

            <select name="jour" class="form-control" style="width: 10%; margin: 0 10px">
                <?php for ($i = 1; $i <= 31; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>

            <select name="mois" class="form-control" style="width: 10%; margin: 0 10px">
                <option value="1">janvier</option>
                <option value="2">février</option>
                <option value="3">mars</option>
                <option value="4">avril</option>
                <option value="5">mai</option>
                <option value="6">juin</option>
                <option value="7">juillet</option>
                <option value="8">aout</option>
                <option value="9">septembre</option>
                <option value="10">octobre</option>
                <option value="11">novembre</option>
                <option value="12">décembre</option>
            </select>

            <select name="annee" class="form-control" style="width: 10%; margin: 0 10px">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success mt-3">
    </form>
</div>

</body>
</html>
