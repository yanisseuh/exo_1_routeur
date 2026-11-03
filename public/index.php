<?php
require_once 'model/ModelProduit.php';
require_once 'model/ModelVendeur.php';

require_once 'view/ViewProduit.php';
require_once 'view/ViewVendeur.php';

require_once 'controller/ControllerProduit.php';
require_once 'controller/ControllerVendeur.php';

$pdo=new PDO(
    'mysql:host=localhost;dbname=exorouteur1;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$page = $_GET['page'] ?? 'produits';

switch ($page) {
    case 'vendeurs':

        $model = new ModelVendeur($pdo);
        $view = new ViewVendeur();

        $controller = new ControlleurVendeur($model, $view);
        break;

        case 'produits':
            default:
            $model = new ModelProduit($pdo);
            $view = new ViewProduit();

            $controller = new ControllerProduit($model, $view);
            
            break;

}
$controller->render();


?>