<?php 

class Matematikaxii extends Controller{
    public function index($nama = 'Mata Pelajaran Matematika Kelas XII')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'matematikaxii';
        $data['pb'] = $this->model('Matematikaxii_model')->getAllMatematikaxii();
        $this->view('templates/header', $data);
        $this->view('matematikaxii/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Matematikaxii_model')->getMatematikaxiiById($id);
        $this->view('templates/header', $data);
        $this->view('matematikaxii/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Matematikaxii_model')->tambahDataMatematikaxii($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matematikaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikaxii');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Matematikaxii_model')->hapusDataMatematikaxii($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matematikaxii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikaxii');
            exit;
        }
    }
}