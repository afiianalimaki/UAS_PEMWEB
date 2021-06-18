<?php 

class Fisikaxii extends Controller{
    public function index($nama = 'Mata Pelajaran Fisika Kelas XII')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'fisikaxii';
        $data['pb'] = $this->model('Fisikaxii_model')->getAllFisikaxii();
        $this->view('templates/header', $data);
        $this->view('fisikaxii/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Fisikaxii_model')->getFisikaxiiById($id);
        $this->view('templates/header', $data);
        $this->view('fisikaxii/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Fisikaxii_model')->tambahDataFisikaxii($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/fisikaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikaxii');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Fisikaxii_model')->hapusDataFisikaxii($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/fisikaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikaxii');
            exit;
        }
    }
}