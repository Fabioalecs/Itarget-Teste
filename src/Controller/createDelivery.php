<?php
namespace ItargetTest\Controller;
require_once __DIR__.'../../../vendor/autoload.php';


use ItargetTest\Entity\Delivery;
use ItargetTest\Model\Delivery as ModelDelivery;

$title = $_POST['title'];
$titleSanitized = filter_var($title, FILTER_UNSAFE_RAW); 

$description = $_POST['description'];
$descriptionSanitized = filter_var($description, FILTER_UNSAFE_RAW);

$deliveryDeadline = $_POST['deadline'];


$newDelivery = new ModelDelivery(new Delivery());
$newDelivery->createDelivery($title, $descriptionSanitized, $deliveryDeadline);

header('Location: ../Controller/indexDelivery.php');