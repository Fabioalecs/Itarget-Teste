<?php
namespace ItargetTest\Controller;
require_once __DIR__.'../../../vendor/autoload.php';


use ItargetTest\Entity\Delivery;
use ItargetTest\Model\Delivery as ModelDelivery;

$id = $_GET['id'];

$deleteDelivery = new ModelDelivery(new Delivery());
$deleteDelivery->deleteDelivery($id);


header('Location: ../Controller/indexDelivery.php');

