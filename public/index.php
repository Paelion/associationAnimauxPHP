<?php
define('ROOT', dirname(__DIR__));
require '../Autoloader.php';
Autoloader::register();

use Model\DbInterface;
use Model\AnimalModel;
use Model\ProductModel;
use Model\CommandeModel;
use Database\createDatabase;


if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $model = new AnimalModel();
    $animal = $model->findAll();
    //$animals = [];

    $modelProduct = new ProductModel();
    $product = $modelProduct->findAll();
    include ROOT . '/views/indexView.php';

} elseif ((isset($_GET["page"]) && $_GET["page"] == 'animaux') || !isset($_GET["page"])) {
    $model = new AnimalModel();
    $animals = $model->findAll();
    //$animals = [];
    include ROOT . '/views/animauxView.php';

} elseif ((isset($_GET["page"]) && $_GET["page"] == 'product') || !isset($_GET["page"])) {
    $model = new ProductModel();
    $products = $model->findAll();

    include ROOT . '/views/productView.php';
} elseif ((isset($_GET["page"]) && $_GET["page"] == 'panier') || !isset($_GET["page"])) {
    $model = new CommandeModel();
    $commandes = $model->findAll();
    include ROOT . '/views/commandeView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'new') {
    include ROOT . '/views/newView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'newProduct') {
    include ROOT . '/views/newProductView.php';

}elseif (isset($_GET["page"]) && $_GET["page"] == 'save') {
    $model = new DbInterface();
    $animals = $model->save($_POST, 'animal');
    header("Location: index.php?page=animaux");

} elseif (isset($_GET["page"]) && $_GET["page"] == 'saveProduct') {
    $model = new DbInterface();
    $products = $model->save($_POST, 'product');
    header("Location: index.php?page=product");

}  elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
    $model = new AnimalModel();
    $animal = $model->find($_GET["id"]);

    include ROOT . '/views/singleView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleProduct') {
    $model = new ProductModel();
    $product = $model->find($_GET["id"]);

    include ROOT . '/views/singleProductView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'reservation') {
    $model = new AnimalModel();
    $animal = $model->find($_GET["id"]);

    include ROOT . '/views/reservationView.php';

}elseif (isset($_GET["page"]) && $_GET["page"] == 'modify') {
    $model = new AnimalModel();
    $animal = $model->find($_GET["id"]);
    include ROOT . '/views/modifyView.php';

}elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyProduct') {
    $model = new ProductModel();
    $product = $model->find($_GET["id"]);
    include ROOT . '/views/modifyProductsView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'saveModification') {
    $model = new DbInterface();
    $animal = $model->update('animal', $_POST, $_GET["id"]);
    header("Location: index.php?page=single&id=" . $_GET["id"]);

} elseif (isset($_GET["page"]) && $_GET["page"] == 'delete') {
    $model = new DbInterface();
    $animal = $model->delete('animal', $_GET["id"]);
    header("Location: index.php?page=home");

} elseif (isset($_GET["page"]) && $_GET["page"] == 'saveModificationProduct') {
    $model = new DbInterface();
    $product = $model->update('product', $_POST, $_GET["id"]);
    header("Location: index.php?page=singleProduct&id=" . $_GET["id"]);

} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteProduct') {
    $model = new DbInterface();
    $product = $model->delete('product', $_GET["id"]);
    header("Location: index.php?page=product");

} elseif (isset($_GET["page"]) && $_GET["page"] == 'saveLigneCommande'){

}
/*
 * le client est sur ma page avec les produits
 * -> il sélectionne le produit qu'il veut, il clic sur un btn ajouter au panier par exemple
 * -> il sélectionne la quantité
 * -> puis c'est dans son panier
 * une fois qu'il a choisit tous ces articles, il va sur la page panier ou on voit tous les articles, il paye
 * -> Une commande se créé dans la Db puis on enregistre tous les produits acheté dans "ligne commande" en rattachant ça à la "commande" qu'on vient de créer
 */