<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table                = 'products';
    protected $primaryKey           = 'product_id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['batch_no', 'product_name', 'part_name', 'part_number', 'category_id'];
}
