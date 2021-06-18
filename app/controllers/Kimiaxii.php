<?php 

class Kimiaxii extends Controller{
    public function index($nama = 'Mata Pelajaran Kimia Kelas XII')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'kimiaxii';
        $data['pb'] = $this->model('Kimiaxii_model')->getAllKimiaxii();
        $this->view('templates/header', $data);
        $this->view('kimiaxii/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Kimiaxii_model')->getKimiaxiiById($id);
        $this->view('templates/header', $data);
        $this->view('kimiaxii/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Kimiaxii_model')->tambahDataKimiaxii($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kimiaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiaxii');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Kimiaxii_model')->hapusDataKimiaxii($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kimiaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiaxii');
            exit;
        }
    }
}