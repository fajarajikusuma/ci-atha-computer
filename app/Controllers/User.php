<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $datapkl = new \App\Models\AbsensiModel();
        $pkl = $datapkl->findAll();
        $data = [
            'title' => 'Input Presensi',
            'pkl' => $pkl
        ];
        return view('user/input', $data);
    }
    public function simpanUser()
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
            'ket' => $this->request->getVar('ket'),
            'sekolah' => $this->request->getVar('sekolah')
        ];
        $cek = array('id_siswa' => $id, 'tgl' => $tgl);
        $sql = $datapkl->where($cek)->first();
        if ($sql > 0) {
            session()->setFlashdata('error', "Hari Ini <b>$id - $nama</b> Sudah Absen");
            return redirect()->to('/user');
        } else {
            session()->setFlashdata('pesan', "Selamat Datang <b>$id - $nama</b>, Presensi Telah Masuk");
            $datapkl->insert($data);
            return redirect()->to('/user');
        }
    }
}
