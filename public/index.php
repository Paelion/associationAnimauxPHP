<?php
define ('ROOT', dirname(__DIR__));
require '../Autoloader.php';
Autoloader::register();

use Model\DbInterface;
use Model\AnimalModel;
use Database\createDatabase;

if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $model = new AnimalModel();
    $animal = $model->findBy(["name" => "test"]);
    include ROOT . '/views/indexView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'new') {
    include ROOT . '/views/newView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'save') {
    $model = new DbInterface();
    $animal = $model->save($_POST, 'animal');
    header("Location: index.php?page=home");

} elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
    $model = new AnimalModel();
    $animal = $model->find($_GET["id"]);
    include ROOT . '/views/singleView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'modify') {
    $model = new AnimalModel();
    $animal = $model->find($_GET["id"]);
    include ROOT . '/views/modifyView.php';

} elseif (isset($_GET["page"]) && $_GET["page"] == 'saveModification') {
    $model = new DbInterface();
    $animal = $model->update('animal', $_POST, $_GET["id"]);
    header("Location: index.php?page=single&id=". $_GET["id"]);

} elseif (isset($_GET["page"]) && $_GET["page"] == 'delete') {
    $model = new DbInterface();
    $animal = $model->delete('animal', $_GET["id"]);
    header("Location: index.php?page=home");

}














