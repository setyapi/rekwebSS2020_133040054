<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_ElektronikModel extends Model
{
    protected $table         = 'barang_elektronik';
    protected $useTimestamps = true;
    protected $allowedFields = ['kategori', 'kode_barang', 'brand_barang', 'label', 'gambar', 'nama', 'deskripsi', 'harga_barang'];


    public function getbarang($nama = false)
    {

        if ($nama == false) {
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }

    public function search($keyword)
    {
        $builder = $this->table('barang_elektronik');
        $builder->like('nama', $keyword);
        $builder->like('kategori', $keyword);
        $builder->like('brand_barang', $keyword);
        $builder->like('label', $keyword);
        $builder->like('deskripsi', $keyword);


        return $builder;
    }
}
