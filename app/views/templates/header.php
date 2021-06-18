<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']?> Page</title>
    <link rel="stylesheet"  href="<?= BASEURL;  ?>/css/bootstrap.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: powderblue;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= BASEURL;  ?>/img/smart.png" width="70" height="50" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand" href="<?= BASEURL;  ?>" style="color=black" >SMART_DA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <ul class="nav nav-pills " id="pills-tab" role="tablist">
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/siswa">Siswa</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/guru">Guru</a>
            </div>
            </li>
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kelas X
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/matematikax">Matematika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/fisikax">Fisika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/kimiax">Kimia</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/biologix">Biologi</a>
            </div>
            </li>
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kelas XI
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/matematikaxi">Matematika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/fisikaxi">Fisika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/kimiaxi">Kimia</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/biologixi">Biologi</a>
            </div>
            </li>
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kelas XII
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/matematikaxii">Matematika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/fisikaxii">Fisika</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/kimiaxii">Kimia</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/biologixii">Biologi</a>
            </div>
            </li>
            <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?= BASEURL ;?>/info">Info</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
        </div>
    </div>
</nav>

