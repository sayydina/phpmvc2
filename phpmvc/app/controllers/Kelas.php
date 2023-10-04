<?php

class kelas extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header', $data);
        $this->view('Kelas/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getKelasById($id);
        $this->view('templates/header', $data);
        $this->view('Kelas/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Kelas_model')->tambahDataKelas($_POST) > 0) {
            Flasher::setFlash('Data Kelas ', 'berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            Flasher::setFlash('Data Kelas', 'gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kelas_model')->hapusDataKelas($id) > 0) {
            Flasher::setFlash('Data Kelas', 'berhasil ', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            Flasher::setFlash('Data Kelas', 'gagal ', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Kelas_model')->getKelasById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Kelas_model')->ubahDataKelas($_POST) > 0) {
            Flasher::setFlash('Data Kelas', 'berhasil ', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            Flasher::setFlash('Data Kelas', 'gagal ', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->cariDataKelas();
        $this->view('templates/header', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
}
