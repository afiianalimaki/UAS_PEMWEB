<div class="p-3 mb-2 bg-light text-dark"><center><h1><?= $data['nama'] ;?></h1></center>
<div class="container mt-5">
    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/gbrfisikaxi/ubud.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> fisikaxi merupakan tujuan wisata paling populer di muka bumi ini. Sebagian besar wisatawan bulan madu dan wisatawan liburan akan banyak anda temui yanga berkunjung ke pulau ini.

fisikaxi terkenal dengan tarian dan budayanya, musik tradisional, banyak ukiran, lukisan, kerajinan kulit dan pengerjaan logam cukup populer.

Perjalanan wisata pertama dilakukan oleh Maha Rsi Markandeya dari tanah Jawa untuk tujuan penyebaran Agama Hindu di Pulau fisikaxi pada abad ke 8 Masehi.

Lalu terdapat juga beberapa Tokoh Spiritual lainnya datang ke Pulau fisikaxi untuk tujuan yang sama setelahnya.

Perjalanan wisata dari eropa ke pulau fisikaxi di lakukan Cornellis de Houtman dari Belanda pada Tahun 1579 sebagai orang barat pertama yang mendarat di pulau fisikaxi. Kedatangannya itu adalah salah satu bagian dari ekspedisi mencari rempah-rempah dan berdagang di Nusantara.

Walau tak menemukan rempah-rempah yang mereka cari di pulau ini namun saat singgah sebentar rombongan tersebut menjelaskan tentang Pulau fisikaxi.

Mereka menggambarkan Pulau fisikaxi hanya sebuah kehidupan dengan kebudayaannya yang menurut pandangan mereka sangat unik, tidak pernah dijumpai di tempat lain yang dikunjungi selama mereka mengelilingi dunia.</p>
        </div>
    </div></center>
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
            <p>Daftar fisikaxi SMA</p>
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['namaMateri'] ;?>
                    <a href="<?= BASEURL ;?>/fisikaxi/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus destinasti ini?');">Hapus</a>
                    <a href="<?= BASEURL ;?>/fisikaxi/info/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#formModal">
                Tambah Destinasti
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Destinasti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/fisikaxi/tambah" method="post">
        <div class="form-group">
            <label for="namaMateri">Nama Materi</label>
            <input type="text" class="form-control" id="namaMateri" name="namaMateri">
        </div>
        <div class="form-group">
            <label for="penjelasan">Penjelasan</label>
            <textarea class="form-control" id="penjelasan" name="penjelasan" rows="3"></textarea>
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

