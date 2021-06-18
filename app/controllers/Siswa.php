<?php 

class Siswa extends Controller{
    public function index($nama = 'SMA Negeri 1 JEMBER')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'judul';
        $data['pb'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    } 
    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Siswa_model')->tambahDataSiswa($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
}