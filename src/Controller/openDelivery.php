<?php
namespace ItargetTest\Controller;
require_once __DIR__.'../../../vendor/autoload.php';


use ItargetTest\Entity\Delivery;

$id = $_GET['id'];

$delivery = new Delivery();
$deliveries = $delivery->indexOneDelivery($id);


require __DIR__.'../../View/edit_delivery.php';
