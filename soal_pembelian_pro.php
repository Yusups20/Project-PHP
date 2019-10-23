<?php
    session_start();
    if ($_SESSION['akseslogin']) {
        # code...   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Buku</title>
    <!-- Pemanggilan CSS -->
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
    <!-- Akhir pemanggilan -->
  <style>
      font-family: 'Chilanka',
      cursive;
  </style>
    <title>Assalaam Book Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="soal_pembelian.php">Produk</a>
                </li>
            </ul>
            <form action="logout.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <br><br>
    <center><h2>DATA BUKU</h2></center>
      <div class="row justify-content-center">
         <div class="col-md-5" style="padding:20px;">
            <div class="card border-warning">
               <div class="card-header badge-danger">Data Barang</div>
                  <div class="card-body badge-dark">
                        <form action="soal_pembelian_pro2.php" method="post">
                            <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
                            <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
                            <input type="hidden" name="jk" value=" <?php echo $_POST['jk'] ?> " id="jk">
                            <input type="hidden" name="tanggal_beli" value=" <?php echo $_POST['tanggal_beli'] ?> " id="tanggal_beli">
                            <input type="hidden" name="jumlah" value=" <?php echo $_POST['jumlah'] ?> " id="jumlah">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml_form = $_POST['jumlah'];
                                for ($a = 0; $a < $jml_form; $a++) { ?>
                                        <div class="form-group">
                                            <label for="">Nama Barang</label>
                                            <input type="text" class="form-control" name="makanan[]" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode</label>
                                            <input type="text" class="form-control" name="kode[]" id="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis Buku</label>
                                            <select class="form-control" name="jenis[]" id="">
                                          <option>Pilih</option>
                                          <option>Novel</option>
                                          <option>Fiksi</option>
                                          <option>Horror</option>
                                          <option>Cergam</option>
                                          <option>Komik</option></select>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" class="form-control" name="harga[]" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah</label>
                                        <input type="number" class="form-control" name="j[]" id="" min="1" required><br>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav mr-auto"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- Pemanggilan Js -->
    <script src="Assets/js/jquery-3.4.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.js"></script>
    <!-- Akhir Pemanggilan js -->
</body>
</html>
<?php
    }else{
        echo "<script> alert('Silahkan Login Terlebih dahulu');"." window.location.href='index.php' </script>";
    }
?>