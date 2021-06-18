<?php 

class Matematikaxi extends Controller{
    public function index($nama = 'Mata Pelajaran Matematika Kelas XI')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'matematikaxi';
        $data['pb'] = $this->model('Matematikaxi_model')->getAllMatematikaxi();
        $this->view('templates/header', $data);
        $this->view('matematikaxi/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Matematikaxi_model')->getMatematikaxiById($id);
        $this->view('templates/header', $data);
        $this->view('matematikaxi/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Matematikaxi_model')->tambahDataMatematikaxi($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matematikaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikaxi');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Matematikaxi_model')->hapusDataMatematikaxi($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matematikaxi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matematikaxi');
            exit;
        }
    }
}