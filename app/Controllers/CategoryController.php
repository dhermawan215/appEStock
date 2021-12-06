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
        $db = $this->CategoryModel->findAll();


        $data = [
            'title' => 'Category Pages',
            'data' => $db,
            'encrypter' => \Config\Services::encrypter($this->config)
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

    public function edit($id)
    {
        $encrypter = \Config\Services::encrypter($this->config);
        $decrypted_data = $encrypter->decrypt(hex2bin($id));

        $findData = $this->CategoryModel->find($decrypted_data);


        $data = [
            'title' => 'Category Pages - Edit',
            'validation' => \Config\Services::validation(),
            'encrypter' => \Config\Services::encrypter($this->config),
            'data' => $findData,
        ];

        return \view('pages/categories/formEdit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_category');
        $encrypter = \Config\Services::encrypter($this->config);
        if (!$this->validate([
            'category_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'category name is required!, try again ']
            ]
        ])) {
            return redirect()->to('/categories/edit/' . $id)->withInput();
        } else {
            $id2 = $encrypter->decrypt(hex2bin($id));
            $this->CategoryModel->save([
                'id_category' => $id2,
                'category_name' => \htmlspecialchars($this->request->getPost('category_name'))
            ]);
            session()->setFlashdata('warning', 'Data has been updated');
            return redirect()->to(route_to('categories'));
        }
    }

    public function delete($id)
    {
        $this->CategoryModel->delete($id);
        \session()->setFlashData('danger', 'data was deleted');
        return \redirect()->to(\route_to('categories'));
    }
}
