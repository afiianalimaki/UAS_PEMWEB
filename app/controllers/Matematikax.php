<?php 

class Matematikax extends Controller{
    public function index($nama = 'Mata Pelajaran Matematika Kelas X')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'matematikax';
        $data['pb'] = $this->model('Matematikax_model')->getAllMatematikax();
        $this->view('templates/header', $data);
        $this->view('matematikax/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Matematikax_model')->getMatematikaxById($id);
        $this->view('templates/header', $data);
        $this->view('matematikax/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Matematikax_model')->tambahDataMatematikax($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matematikax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikax');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Matematikax_model')->hapusDataMatematikax($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matematikax');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikax');
            exit;
        }
    }
}