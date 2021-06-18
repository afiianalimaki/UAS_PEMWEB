<?php 

class Fisikaxi extends Controller{
    public function index($nama = 'Mata Pelajaran Fisika Kelas XI')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'fisikaxi';
        $data['pb'] = $this->model('Fisikaxi_model')->getAllFisikaxi();
        $this->view('templates/header', $data);
        $this->view('fisikaxi/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Fisikaxi_model')->getFisikaxiById($id);
        $this->view('templates/header', $data);
        $this->view('fisikaxi/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Fisikaxi_model')->tambahDataFisikaxi($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/fisikaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikaxi');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Fisikaxi_model')->hapusDataFisikaxi($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/fisikaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikaxi');
            exit;
        }
    }
}