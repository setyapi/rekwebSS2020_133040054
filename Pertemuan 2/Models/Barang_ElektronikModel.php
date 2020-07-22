<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_ElektronikModel extends Model
{
    protected $table         = 'barang_elektronik';
    protected $useTimestamps = true;

    public function getbarang($nama = false)
    {

        if ($nama == false) {
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }
}
