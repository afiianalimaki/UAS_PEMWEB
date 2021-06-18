<div class="p-3 mb-2 bg-light text-dark"><center><h1><?= $data['nama'] ;?></h1></center>
<div class="container mt-5">
    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/gbrfisikaxii/ubud.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> Asal mula pemikiran matematika terletak di dalam konsep bilangan, besaran, dan bangun. 
              Pengkajian modern terhadap fosil binatang menunjukkan bahwa konsep ini tidak berlaku unik bagi manusia. 
              Konsep ini mungkin juga menjadi bagian sehari-hari di dalam kawanan pemburu.
              Bahwa konsep bilangan berkembang tahap demi tahap seiring waktu adalah bukti di beberapa bahasa zaman kini mengawetkan perbedaan antara "satu", "dua", dan "banyak", tetapi bilangan yang lebih dari dua tidaklah demikian. 
              Benda matematika tertua yang sudah diketahui adalah tulang Lebombo, ditemukan di pegunungan Lebombo di Swaziland dan mungkin berasal dari tahun 35000 SM.
              Tulang ini berisi 29 torehan yang berbeda yang sengaja digoreskan pada tulang fibula baboon. 
              Terdapat bukti bahwa kaum perempuan biasa menghitung untuk mengingat siklus haid mereka goresan pada tulang atau batu, diikuti dengan tanda yang berbeda.
               Juga artefak prasejarah ditemukan di Afrika dan Prancis, dari tahun 35.000 SM dan berumur 20.000 tahun, menunjukkan upaya dini untuk menghitung waktu. 
               Tulang Ishango, ditemukan di dekat batang air Sungai Nil (timur laut Kongo), berisi sederetan tanda lidi yang digoreskan di tiga lajur memanjang pada tulang itu. Tafsiran umum adalah bahwa tulang Ishango menunjukkan peragaan terkuno yang sudah diketahui tentang barisan bilangan prima[10] atau kalender lunar enam bulan.
               Periode Predinastik Mesir dari milenium ke-5 SM, secara grafis menampilkan rancangan-rancangan geometris. 
               Telah diakui bahwa bangunan megalit di Inggris dan Skotlandia, dari milenium ke-3 SM, menggabungkan gagasan-gagasan geometri seperti lingkaran, elips, dan tripel Pythagoras di dalam rancangan mereka.</p>
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
            <p>Materi Pelajaran Matematika</p>
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['namaMateri'] ;?>
                    <a href="<?= BASEURL ;?>/fisikaxii/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus materi ini?');">Hapus</a>
                    <a href="<?= BASEURL ;?>/fisikaxii/info/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#formModal">
                Tambah Materi
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/fisikaxii/tambah" method="post">
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

