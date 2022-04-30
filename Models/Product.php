<?php

namespace App\Test\Models;

use App\Core\Models\BaseMongo;

Class Product extends BaseMongo
{
    protected $table = "product";
    protected $collectionName = "product";

}