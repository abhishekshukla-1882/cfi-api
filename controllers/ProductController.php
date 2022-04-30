<?php

namespace App\Test\Controllers;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use App\Core\Controllers\BaseController;
use App\Test\Models\Product;  // If working with Models

Class ProductController extends BaseController
{

    public function testAction()
    {
        echo "Hello";
    }
    public function createproductAction(){
        $title = $this->request->get('title');
        $price = $this->request->get('price');
        // $discription = $this->request->get('discription');
        $obj = new Product();
        $obj->name = $title;
        $obj->price = $price;
        $result = $obj->save();
        print_r($result);
        echo "<br>Successfully Added......";
        // echo $title;
        die;
    }
    public function updateproductAction(){
        $id = $this->request->get('id');
        $title = $this->request->get('title');
        $price = $this->request->get('price');
        $obj = new Product();
        $obj->_id= new \MongoDB\BSON\ObjectID($id);
        $obj->name = $title;
        $obj->price = $price;
        $result = $obj->save();
        echo "<br>Successfully Updated......";
        die;
    }

    public function deleteproductAction(){
        $id = $this->request->get('id');
        $obj = new Product();
        $obj->_id= new \MongoDB\BSON\ObjectID($id);

        $obj->delete();
        echo "Deleted Successfully";
        die;

    }

}