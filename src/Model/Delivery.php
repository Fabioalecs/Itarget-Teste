<?php

namespace ItargetTest\Model;

use ItargetTest\Entity\Delivery as DeliveryEntity;

class Delivery
{

    private $deliveryEntity;


    public function __construct(DeliveryEntity $deliveryEntity)
    {

            $this->deliveryEntity = $deliveryEntity;
    
    }

    public function createDelivery($title, $description, $delivery_deadline)
    {
        $this->deliveryEntity->createDelivery($title, $description, $delivery_deadline);
    } 

    public function updateDelivery($title, $description, $delivery_deadline, $id)
    {
        $this->deliveryEntity->updateDelivery($title, $description, $delivery_deadline, $id);
    } 

    public function indexDelivery()
    {
        $this->deliveryEntity->indexDelivery();
    }

    public function deleteDelivery($id)
    {
        $this->deliveryEntity->deleteDelivery($id);
    }

    public function wasDelivered($id)
    {
        $this->deliveryEntity->wasDelivered($id);
    }


}
