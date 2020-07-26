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

        $currentPage = $this->request->getVar('page_barang_elektronik') ? $this->request->getVar('page_barang_elektronik') : 1;


        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $barang =   $this->barangModel->search($keyword);
        } else {
            $barang = $this->barangModel;
        }


        // $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $barang->paginate(6, 'barang_elektronik'),
            'pager' => $this->barangModel->pager,
            'currentPage' => $currentPage
        ];




        return view('barang/index', $data);
    }

    public function detail($nama)
    {

        $data = [

            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getbarang($nama)
        ];

        // if (empty($data['barang_elektronik'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang ' . $nama . ' tidak ditemukan');
        // }
        return view('barang/detail', $data);
    }

    public function create()
    {
        //session();
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()

        ];

        return view('barang/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'kategori' => [
                'rules' => 'required[barang_elektronik.kategori]',
                'errors' => [
                    'required' => 'Kateogri Harus Diisi'
                ]
            ],
            'kode_barang' => [
                'rules' => 'required|is_unique[barang_elektronik.kode_barang]',
                'errors' => [
                    'required' => 'Kode Barang Harus Diisi',
                    'is_unique' => 'Kode Barang Sudah terdaftar'
                ]
            ],
            'brand_barang' => [
                'rules' => 'required[barang_elektronik.brand_barang]',
                'errors' => [
                    'required' => 'Brand Harus Diisi'
                ]
            ],
            'label' => [
                'rules' => 'required[barang_elektronik.label]',
                'errors' => [
                    'required' => 'Nama Harus Diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|is_unique[barang_elektronik.deskripsi]',
                'errors' => [
                    'required' => 'Deskripsi Harus Diisi',
                    'is_unique' => 'Deskripsi Sudah terdaftar'
                ]
            ],
            'harga_barang' => [
                'rules' => 'required[barang_elektronik.harga_barang]',
                'errors' => [
                    'required' => 'Harga Harus Diisi'
                ]
            ]


        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/barang/create')->withInput()->with('validation', $validation);
            return redirect()->to('/barang/create')->withInput();
        }
        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //gambar default
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            $namaGambar = $fileGambar->getRandomName();
            //pindah file ke folder img
            $fileGambar->move('img', $namaGambar);
        }


        $nama = url_title($this->request->getVar('label'), '_', true);
        $this->barangModel->save([
            'kategori' => $this->request->getVar('kategori'),
            'kode_barang' => $this->request->getVar('kode_barang'),
            'brand_barang' => $this->request->getVar('brand_barang'),
            'label' => $this->request->getVar('label'),
            'gambar' => $namaGambar,
            'nama' => $nama,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga_barang' => $this->request->getVar('harga_barang')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/barang');
    }

    public function delete($id)
    {

        $barang = $this->barangModel->find($id);

        if ($barang['gambar'] != 'default.jpg') {

            unlink('img/' . $barang['gambar']);
        }


        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/barang');
    }

    public function edit($nama)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getbarang($nama)

        ];

        return view('barang/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]


        ])) {

            return redirect()->to('/barang/create')->withInput();
        }
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $nama = url_title($this->request->getVar('label'), '_', true);
        $this->barangModel->save([
            'id' => $id,
            'kategori' => $this->request->getVar('kategori'),
            'kode_barang' => $this->request->getVar('kode_barang'),
            'brand_barang' => $this->request->getVar('brand_barang'),
            'label' => $this->request->getVar('label'),
            'gambar' => $namaGambar,
            'nama' => $nama,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga_barang' => $this->request->getVar('harga_barang')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/barang');
    }
}
