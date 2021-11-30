<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Category Pages'
        ];
        return view('pages/categories/index', $data);
    }
}
