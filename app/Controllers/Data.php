<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        //$showdata = $this->request->getVar('show');
        $currentPage = $this->request->getVar('page_absensi') ? $this->request->getVar('page_absensi') : 1;
        $datapkl = new \App\Models\AbsensiModel();
        // $pkl = $datapkl->findAll();
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $tmp = $datapkl->search($cari);
        } else {
            $tmp = $datapkl;
        }
        $datapkl->orderBy('tgl', 'ASC');
        $data = [
            'title' => 'Daftar Absensi',
            //'show' => $showdata,
            'pkl' => $tmp->paginate(10, 'absensi'),
            'pager' => $datapkl->pager,
            'currentPage' => $currentPage
        ];
        return view('content/datapkl', $data);
    }
    public function input()
    {
        $data = [
            'title' => 'Input Absensi',
        ];
        return view('content/inputabsensi', $data);
    }
    public function simpanData()
    {
        $datapkl = new \App\Models\AbsensiModel();
        $nama = $this->request->getVar('nama');
        $id = $this->request->getVar('id');
        $tgl = $this->request->getVar('tgl');
        $data = [
            'id' => $this->request->getVar('no'),
            'id_siswa' => $this->request->getVar('id'),
            'nama_siswa' => $this->request->getVar('nama'),
            'tgl' => $this->request->getVar('tgl'),
            'jam' => $this->request->getVar('jam'),
            'ket' => $this->request->getVar('ket')
        ];
        $cek = array('id_siswa' => $id, 'tgl' => $tgl);
        $sql = $datapkl->where($cek)->first();
        if ($sql > 0) {
            session()->setFlashdata('error', "Hari Ini <b>$id - $nama</b> Sudah Absen");
            return redirect()->to('/data/input');
        } else {
            session()->setFlashdata('pesan', "Selamat Datang <b>$id - $nama</b>, Presensi Telah Masuk");
            $datapkl->insert($data);
            return redirect()->to('/data/input');
        }
    }
    public function hapus($id)
    {
        $datapkl = new \App\Models\AbsensiModel();
        $datapkl->delete($id);
        return redirect()->to('/data');
    }
    public function edit($id)
    {
        $datapkl = new \App\Models\AbsensiModel();
        $data = [
            'title' => 'Ubah Data Absensi',
            'absen' => $datapkl->find($id)
        ];
        return view('Content/ubah', $data);
    }
    public function editSimpan($id)
    {
        $datapkl = new \App\Models\AbsensiModel();
        $datapkl->update($id, [
            'id_siswa' => $this->request->getVar('id'),
            'nama_siswa' => $this->request->getVar('nama'),
            'tgl' => $this->request->getVar('tgl'),
            'ket' => $this->request->getVar('ket')
        ]);
        return redirect()->to('/data');
    }
    public function cetak()
    {
        $datapkl = new \App\Models\AbsensiModel();
        $datapkl->orderBy('tgl', 'ASC');
        $pkl = $datapkl->findAll();
        $data = [
            'title' => 'Cetak Absensi',
            'pkl' => $pkl
        ];
        return view('content/cetak', $data);
    }
    public function reset()
    {
        $datapkl = new \App\Models\AbsensiModel();
        $datapkl->emptyTable('absensi');
        session()->setFlashdata('pesan', "Data Anda Telah Di Hapus Semua");
        return redirect()->to('/data');
    }

    public function deleteSelectedData()
    {
        if (isset($_POST['deleteData'])) {
            if (!empty($this->request->getVar('id'))) {
                $datapkl = new \App\Models\AbsensiModel();
                //get data nama from database
                $id = $datapkl->select('nama_siswa')->whereIn('id', $this->request->getVar('id'))->findAll();
                // dd($id);
                //array to string
                $id = implode(", ", array_column($id, 'nama_siswa'));
                $datapkl->delete($this->request->getVar('id'));
                session()->setFlashdata('pesan', "Data <b>$id</b> Telah Di Hapus");
                return redirect()->to('/data');
            } else {
                session()->setFlashdata('error', "Tidak Ada Data Yang Dipilih");
                return redirect()->to('/data');
            }
        }
    }
}
