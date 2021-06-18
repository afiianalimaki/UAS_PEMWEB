<?php 

class Biologixii extends Controller{
    public function index($nama = 'Mata Pelajaran Biologi Kelas XII')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'biologixii';
        $data['pb'] = $this->model('Biologixii_model')->getAllBiologixii();
        $this->view('templates/header', $data);
        $this->view('biologixii/index', $data);
        $this->view('templates/footer');

    } 
    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Biologixii_model')->getBiologixiiById($id);
        $this->view('templates/header', $data);
        $this->view('biologixii/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Biologixii_model')->tambahDataBiologixii($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/biologixii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologixii');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Biologixii_model')->hapusDataBiologixii($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/biologixii');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologixii');
            exit;
        }
    }
}