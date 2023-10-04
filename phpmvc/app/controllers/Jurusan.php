<?php

class jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $this->view('templates/header', $data);
        $this->view('Jurusan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->getJurusanById($id);
        $this->view('templates/header', $data);
        $this->view('Jurusan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Jurusan_model')->tambahDataJurusan($_POST) > 0) {
            Flasher::setFlash('Data Jurusan ', 'berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('Data Jurusan ', 'gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Jurusan_model')->hapusDataJurusan($id) > 0) {
            Flasher::setFlash('Data Jurusan ', 'berhasil ', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('Data Jurusan ', 'gagal ', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Jurusan_model')->getJurusanById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Jurusan_model')->ubahDataJurusan($_POST) > 0) {
            Flasher::setFlash('Data Jurusan ', 'berhasil ', 'diubah', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('Data Jurusan ', 'gagal ', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->cariDataJurusan();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
}
