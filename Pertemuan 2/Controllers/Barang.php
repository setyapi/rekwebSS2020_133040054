<?php

namespace App\Controllers;

use App\Models\Barang_ElektronikModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new Barang_ElektronikModel();
    }

    public function index()
    {
        // $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $this->barangModel->getbarang()
        ];




        return view('barang/index', $data);
    }

    public function detail($nama)
    {

        $data = [

            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getbarang($nama)
        ];
        return view('barang/detail', $data);
    }
}
