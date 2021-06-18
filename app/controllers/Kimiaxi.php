<?php 

class Kimiaxi extends Controller{
    public function index($nama = 'Mata Pelajaran Kimia Kelas XI')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'kimiaxi';
        $data['pb'] = $this->model('Kimiaxi_model')->getAllKimiaxi();
        $this->view('templates/header', $data);
        $this->view('kimiaxi/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Kimiaxi_model')->getKimiaxiById($id);
        $this->view('templates/header', $data);
        $this->view('kimiaxi/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Kimiaxi_model')->tambahDataKimiaxi($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kimiaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiaxi');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Kimiaxi_model')->hapusDataKimiaxi($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kimiaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kimiaxi');
            exit;
        }
    }
}