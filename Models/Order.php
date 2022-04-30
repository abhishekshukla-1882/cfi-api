<?php

namespace App\Test\Models;

use App\Core\Models\BaseMongo;

Class Order extends BaseMongo
{
    protected $table = "order";
    protected $collectionName = "order";

}