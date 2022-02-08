<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\CategoryModel;
use Mpdf\Mpdf;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->ProductsModel = new ProductsModel();
        $this->CategoryModel = new CategoryModel();
        $this->mpdf = new \Mpdf\Mpdf();
        \session();
        $this->config    = new \Config\Encryption();
    }

    public function index()
    {
        $db = $this->ProductsModel->findAll();
        $data = [
            'title' => 'Category Pages',
            'data' => $db,
            'encrypter' => \Config\Services::encrypter($this->config)
        ];
        return view('pages/products/index', $data);
    }

    public function create()
    {
        $db = $this->CategoryModel->findAll();
        $data = [
            'title' => 'Product Pages',
            'validation' => \Config\Services::validation(),
            'dataCategory' => $db,
            'encrypter' => \Config\Services::encrypter($this->config)
        ];
        return view('pages/products/form', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'batch_no' => [
                'rules' => 'required',
                'errors' => ['required' => 'batch number is required!, try again ']
            ],
            'product_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'product name is required!, try again ']
            ],
            'part_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'part name is required!, try again ']
            ],
            'part_number' => [
                'rules' => 'required',
                'errors' => ['required' => 'part number is required!, try again ']
            ],
            'category_id' => [
                'rules' => 'required',
                'errors' => ['required' => 'category is required!, try again ']
            ],
        ])) {
            return redirect()->to('/products/input')->withInput();
        }
        $this->ProductsModel->save([
            'batch_no' => \htmlspecialchars($this->request->getPost('batch_no')),
            'product_name' => \htmlspecialchars($this->request->getPost('product_name')),
            'part_name' => \htmlspecialchars($this->request->getPost('part_name')),
            'part_number' => \htmlspecialchars($this->request->getPost('part_number')),
            'category_id' => \htmlspecialchars($this->request->getPost('category_id')),
        ]);
        session()->setFlashdata('success', 'Data saved');
        return redirect()->to(route_to('products'));
    }
}
