<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Daftar</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
<script src="setValue.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Beasiswa</a>
            <!-- <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html#pilihanbeasiswa">Pilihan Beasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="fpendaftaran.php">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="table.php">Hasil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section">
        <div class="container">
            <div>
                <div class="p-5 mt-5">
                    <h1>
                        <center>Form Pendaftaran</center>
                    </h1>
                    <h5>
                        <center>----Daftarkan Diri Anda----</center>
                    </h5>
                    <hr>
                    <form action="ppendaftaran.php" method="post" enctype="multipart/form-data" name="pendaftaran">
                        <div class="form-group">
                            <label for="nama">Nama Anda:</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" id="no_hp" class="form-control" placeholder="Nomor Handphone" name="no_hp" required>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester Saat ini</label>
                            <select class="form-control" id="semester" name="semester" required>
                                <option value="" selected disabled>Pilih Salah Satu</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ipk">IPK terakhir</label>
                            <div>
                            <!-- <input type="text" class="form-control col-sm-9" id="ipk" placeholder="[AUTO]" name="ipk" disabled> -->
                            <input type="text" class="form-control" id="ipk" placeholder="Masukan IPK" name="ipk">
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary col-sm-12" name="check" onclick="randomCheck()">Check</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="beasiswa">Pilihan Beasiswa</label>
                            <select class="form-control" id="beasiswa" name="beasiswa" required>
                                <option value="" selected disabled>Pilih Salah Satu</option>
                                <option value="Akademik">Akademik</option>
                                <option value="Non-Akademik">Non-Akademik</option>
                                <option value="Kedinasan">Kedinasan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="berkas" class="form-label">Berkas Persyaratan</label>
                            <input class="form-control" type="file" id="berkas" name="berkas" required>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" requiredd>
                                <label class="form-check-label" for="invalidCheck2">
                                    Data yang saya isikan adalah benar
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
                        <!-- <button type="submit" class="btn btn-primary" name="simpan" id="simpan" disabled>Simpan</button> -->
                        <button type="reset" class="btn btn-primary" name="batal" id="batal">Batal</button>
                </div>
            </div>
        </div>
        </form>
        </div>
</body>

</html>