<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
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

<div id="slideshow" class="slideshow">
    <div class="slideshow--wrapper">
        <img src="../img/chat.jpg">
        <div class="data">
            <?php for ($i = 0; $i <= 4; $i++) : ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $animal[$i]->nom ?></h5>
                        <div class="card-text">
                            <p>Type: <?= $animal[$i]->type ?></p>
                            <p>Race: <?= $animal[$i]->race ?></p>
                            <p>Taille: <?= $animal[$i]->taille ?>cm</p>
                            <p>Poid: <?= $animal[$i]->poid ?>kg</p>
                            <p>Age: <?= $animal[$i]->age ?>an(s)</p>

                        </div>
                        <a href="index.php?page=single&id=<?= $animal[$i]->id ?>" class="btn btn-primary">Go somewhere</a>
                        <a href="index.php?page=reservation&id=<?= $animal[$i]->id ?>" class="btn btn-primary">Réserver</a>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
    <div class="button">
        <a href="#" class="prevBtn"> </a>
        <a href="#" class="nextBtn"> </a>
    </div>

</div>


<div class="container mt-5">

    <h1>Notre association</h1><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dapibus ligula. Vivamus sit amet nunc vitae
        odio mollis sollicitudin. Nulla eu orci nec dui ullamcorper placerat. Maecenas ornare justo neque, quis pretium
        est volutpat at. In porttitor dictum justo ac malesuada. Orci varius natoque penatibus et magnis dis parturient
        montes, nascetur ridiculus mus. Sed et erat id nunc euismod auctor nec at diam. Nunc nec bibendum metus.

        Praesent a nisi eget dolor sodales vulputate ut quis arcu. Nullam eget nisl fringilla, molestie justo vitae,
        suscipit justo. Nunc commodo quis tellus quis faucibus. Ut placerat, velit at euismod imperdiet, sapien sem
        condimentum turpis, mattis tincidunt felis mi a tortor. Vestibulum molestie dapibus mi, et mollis ante facilisis
        vel. Vivamus eget volutpat tellus. Maecenas vitae fringilla diam. Curabitur ligula felis, volutpat ac sapien at,
        convallis elementum augue.</p>


    <div class="affichage mt-5 justify-content-around" style="display: flex">
        <?php for ($i = 0; $i <= 4; $i++) : ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $product[$i]->nom ?></h5>
                    <div class="card-text">
                        <p>Type: <?= $product[$i]->type ?></p>
                        <p>Animal: <?= $product[$i]->animal ?></p>
                        <p>Prix: <?= $product[$i]->prix ?>€</p>
                        <p>Stock: <?= $product[$i]->stock ?></p>
                    </div>
                    <a href="index.php?page=singleProduct&id=<?= $product[$i]->id ?>" class="btn btn-primary">Go
                        somewhere</a>
                </div>
            </div>
        <?php endfor ?>
    </div>

</div>


<script src="../js/slider.js"></script>

</body>
</html>
