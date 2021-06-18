<?php 

class Biologix extends Controller{
    public function index($nama = 'Mata Pelajaran Biologi Kelas X')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'biologix';
        $data['pb'] = $this->model('Biologix_model')->getAllBiologix();
        $this->view('templates/header', $data);
        $this->view('biologix/index', $data);
        $this->view('templates/footer');

    } 
    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Biologix_model')->getBiologixById($id);
        $this->view('templates/header', $data);
        $this->view('biologix/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Biologix_model')->tambahDataBiologix($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/biologix');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologix');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Biologix_model')->hapusDataBiologix($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/biologix');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/biologix');
            exit;
        }
    }
}