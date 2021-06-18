<?php 

class Fisikax extends Controller{
    public function index($nama = 'Mata Pelajaran Fisika Kelas X')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'fisikax';
        $data['pb'] = $this->model('Fisikax_model')->getAllFisikax();
        $this->view('templates/header', $data);
        $this->view('fisikax/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Fisikax_model')->getFisikaxById($id);
        $this->view('templates/header', $data);
        $this->view('fisikax/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Fisikax_model')->tambahDataFisikax($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/fisikax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikax');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Fisikax_model')->hapusDataFisikax($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/fisikax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fisikax');
            exit;
        }
    }
}