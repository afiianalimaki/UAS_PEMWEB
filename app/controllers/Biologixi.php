<?php 

class Biologixi extends Controller{
    public function index($nama = 'Mata Pelajaran Biologi Kelas XI')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'biologixi';
        $data['pb'] = $this->model('Biologixi_model')->getAllBiologixi();
        $this->view('templates/header', $data);
        $this->view('biologixi/index', $data);
        $this->view('templates/footer');

    } 
    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Biologixi_model')->getBiologixiById($id);
        $this->view('templates/header', $data);
        $this->view('biologixi/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Biologixi_model')->tambahDataBiologixi($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/biologixi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologixi');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Biologixi_model')->hapusDataBiologixi($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/biologixi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologixi');
            exit;
        }
    }
}