<?php
namespace ItargetTest\Controller;
require_once __DIR__.'../../../vendor/autoload.php';


use ItargetTest\Entity\Delivery;

$delivery = new Delivery();
$deliveries = $delivery->indexDelivery();

require __DIR__.'../../View/index_delivery.php';

