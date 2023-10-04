<?php

class guru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Guru';
        $data['guru'] = $this->model('Guru_model')->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('Guru/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Guru';
        $data['guru'] = $this->model('Guru_model')->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('Guru/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Guru_model')->tambahDataGuru($_POST) > 0) {
            Flasher::setFlash('Data Guru ', 'berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            Flasher::setFlash('Data Guru', 'gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Guru_model')->hapusDataGuru($id) > 0) {
            Flasher::setFlash('Data Guru ', 'berhasil ', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            Flasher::setFlash('Data Guru ', 'gagal ', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Guru_model')->getGuruById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Guru_model')->ubahDataGuru($_POST) > 0) {
            Flasher::setFlash('Data Guru ', 'berhasil ', 'diubah', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            Flasher::setFlash('Data Guru ', 'gagal ', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Guru';
        $data['guru'] = $this->model('Guru_model')->cariDataGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}
