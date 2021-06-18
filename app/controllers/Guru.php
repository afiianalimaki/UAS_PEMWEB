<?php 

class Guru extends Controller{
    public function index($nama = 'SMA NEGERI 1 JEMBER')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'guru';
        $data['pb'] = $this->model('Guru_model')->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Guru_model')->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('guru/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Guru_model')->tambahDataGuru($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Guru_model')->hapusDataGuru($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }
}