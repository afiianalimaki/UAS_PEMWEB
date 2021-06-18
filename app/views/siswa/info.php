<div class="container mt-5">
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h4>Data Siswa</h4>
            <br>
            <p class="card-title"> Nama Lengkap : <?=$data['pb']['namaSiswa'] ?></p>
            <p class="card-text">NIS :<?=$data['pb']['NIS'] ?></p>
            <p class="card-text">jenis Kelamin :<?=$data['pb']['jenisKelamin'] ?></p>
            <p class="card-text">Tanggal Lahir :<?=$data['pb']['tanggalLahir'] ?></p>
            <p class="card-text">Alamat :<?=$data['pb']['alamatRumah'] ?></p>
            <a href="<?= BASEURL ;?>/siswa" class="btn btn-outline-dark">Back</a>
        </div>
    </div>
</div>

