<?php 

class Kimiax extends Controller{
    public function index($nama = 'Mata Pelajaran Kimia Kelas X')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'kimiax';
        $data['pb'] = $this->model('Kimiax_model')->getAllKimiax();
        $this->view('templates/header', $data);
        $this->view('kimiax/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Kimiax_model')->getKimiaxById($id);
        $this->view('templates/header', $data);
        $this->view('kimiax/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Kimiax_model')->tambahDataKimiax($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kimiax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiax');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Kimiax_model')->hapusDataKimiax($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kimiax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiax');
            exit;
        }
    }
}