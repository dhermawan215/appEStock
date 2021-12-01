<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use Config\Encryption;

class CategoryController extends BaseController
{
    public function __construct()
    {

        $this->CategoryModel = new CategoryModel();
        \session();
        $this->config    = new \Config\Encryption();
        $this->enkripsi = \Config\Services::encrypter($this->config);
    }

    public function index()
    {

        $data = [
            'title' => 'Category Pages'
        ];
        return view('pages/categories/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Category Input Pages',
            'validation' => \Config\Services::validation(),
        ];
        return view('pages/categories/form', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'category_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'category name is required!, try again ']
            ]
        ])) {
            return redirect()->to('/categories/input')->withInput();
        }

        $this->CategoryModel->save([
            'category_name' => \htmlspecialchars($this->request->getPost('category_name'))
        ]);
        session()->setFlashdata('success', 'Data saved');
        return redirect()->to(route_to('categories'));
    }

    public function edit()
    {
    }

    public function update()
    {
    }
}
