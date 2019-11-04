<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ASSAA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Raport</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header"><center><h3>Raport Siswa</center></h3></div>
                    <div class="card-body">
                        <form action="raport.php" method="post">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Nilai Harian</th>
                                            <th>Nilai UTS</th>
                                            <th>NIlai UAS</th>
                                            <th>Nilai Akhir</th>
                                            <th>Status</th>
                                        </tr>
                                        <?php
                                        if (isset($_POST['simpan'])) {
                                            $a = $_POST['nama'];
                                            $b = $_POST['kelas'];
                                            $c = $_POST['nihar'];
                                            $d = $_POST['niuts'];
                                            $e = $_POST['niuas'];
                                            $f = $c * 60 / 100 + $d * 20 / 100 + $e * 20 / 100;
                                            ?>
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $b; ?></td>
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $d; ?></td>
                                            <td><?php echo $e; ?></td>
                                            <td><?php echo $f; ?></td>
                                            <td><?php if ($f > 75) {
                                                    echo "<strong>LULUS</strong>";
                                                } else {
                                                    "<strong>TIDAK LULUS</strong>";
                                                }; ?></td>
                                            <br>
                                        </tr>
                                        <?php 
                                    } ?>
                                    </table>
                                    <div class="form-group">
                                        <button type"submit" name="submit" class="btn btn-primary">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content --> 

    <!-- Footer -->
    <footer>
        <center>&copy; SMK ASSALAAM BANDUNG</center>
    </footer>

    <!-- Enf Footer -->

    <!-- JS -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
    
</body>
</html>
