<?php
namespace ItargetTest\Controller;
require_once __DIR__.'../../../vendor/autoload.php';


use ItargetTest\Entity\Delivery;



$title = $_POST['title'];
$description = $_POST['description'];

$delivery_deadline = $_POST['deadline'];
$id = $_GET['id'];

$wasDelivered = $_POST['was_delivered'];

$delivery = new Delivery();
$delivery->updateDelivery($title, $description, $delivery_deadline, $id);


if($wasDelivered)
{
    $delivery->wasDelivered($id);
}

header('Location: ../Controller/indexDelivery.php');