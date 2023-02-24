<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Favicon-->
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

    <div class="p-5 mt-5">
    <div class="col-md-12 p-5 pt-3 mt-3" style="padding-top: 500px">
        <h3><i class="fa fa-building-md"></i> List Pendaftar</h3>
        <hr>
        <hr>
        <div class="row">
            <!-- Area Chart -->
            <div class="col">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-warning">Pendaftar</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="Pendaftar" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor Handphone</th>
                                        <th>Semester</th>
                                        <th>IPK</th>
                                        <th>Pilihan Beasiswa</th>
                                        <th>Berkas</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor Handphone</th>
                                        <th>Semester</th>
                                        <th>IPK</th>
                                        <th>Pilihan Beasiswa</th>
                                        <th>Berkas</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    include 'connect.php';
                                    $no = 1;
                                    $pendaftaran = mysqli_query($conn, "select * from pendaftaran");
                                    while ($row = $pendaftaran->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row->nama ?></td>
                                            <td><?php echo $row->email ?></td>
                                            <td><?php echo $row->no_hp ?></td>
                                            <td><?php echo $row->semester ?></td>
                                            <td><?php echo $row->ipk ?></td>
                                            <td><?php echo $row->beasiswa ?></td>
                                            <td><?php echo "assets/" . $row->berkas ?></td>
                                            <td>
                                                <?php
                                                $statuss = $row->statuss;
                                                if ($statuss == 0) {
                                                    ?>
                                                    <a href="ubahStatus.php?id=<?= $row->id ?>&statuss=<?= $row->statuss ?>" class="btn btn-sm btn-danger"><?php echo "Belum diverifikasi";?></a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <button class="btn" style="background-color: cyan;"><?php echo "Terverifikasi";?></button>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>