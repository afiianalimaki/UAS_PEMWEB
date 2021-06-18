<div class="p-3 mb-2 bg-light text-dark"><center><h1><?= $data['nama'] ;?></h1></center>
<div class="container mt-5">
    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/gbrguru/ubud.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class="row-5">
        <div class="col-11">
            <ul class="list-group">
            <p>Daftar Guru</p>
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['namaGuru'] ;?>
                    <a href="<?= BASEURL ;?>/guru/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus data guru ini?');">Hapus</a>
                    <a href="<?= BASEURL ;?>/guru/info/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#formModal">
                Tambah Data Guru
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/guru/tambah" method="post">
        <div class="form-group">
            <label for="namaGuru">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaGuru" name="namaGuru">
        </div>
        <div class="form-group">
            <label for="NIG">NIG</label>
            <input type="text" class="form-control" id="NIG" name="NIG">
        </div>
        <div class="form-group">
            <label for="jenisKelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        <button type="submiit" class="btn btn-outline-info">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

