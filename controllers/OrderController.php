<?php

namespace App\Test\Controllers;
use App\Core\Controllers\BaseController;
use App\Test\Models\Order;  // If working with Models

Class OrderController extends BaseController
{
    public function testAction()
    {
        echo "Order";
    }
    public function createorderAction(){
        $pid = $this->request->get('pid');
        $quantity = $this->request->get('quantity');
        // $price = $this->request->get('price');
        // $discription = $this->request->get('discription');
        $obj = new Order();
        $obj->pid = $pid;
        $obj->quantity = $quantity;
        $result = $obj->save();
        print_r($result);
        echo "<br>Successfully Added Order......";
        // echo $title;
        die;
    }
    public function updateorderAction(){
        $id = $this->request->get('id');
        $quantity = $this->request->get('quantity');
        $obj = new order();
        $obj->_id= new \MongoDB\BSON\ObjectID($id);
        $obj->quantity = $quantity;
        $result = $obj->save();
        echo "<br>Successfully Order Updated......";
        die;
    }
    public function deleteorderAction(){
        $id = $this->request->get('id');
        // $quantity = $this->request->get('quantity');
        $obj = new order();
        $obj->_id= new \MongoDB\BSON\ObjectID($id);

        $obj->delete();;
        echo "<br>Successfully Order Updated......";
        die;
    }
}