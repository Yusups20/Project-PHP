<html>
    <head><title>Form Pembelian Buku</title></head>
<body>

    <form action="" method="POST" name="input">
    <center><h2>Form Pembelian Buku</h2></center>
    <fieldset>
    <legend>Toko Buku Yusup</legend>
    <pre>
            Nama                         : <input type="text" name="nama"><br>
            Alamat                       : <textarea name="alamat" cols="40"rows="5"></textarea><br>
            jenis kelamin                : <input type="radio" name="jurusan" value="Laki-Laki"> Laki-Laki <input type="radio" name="jurusan" value="Perempuan">Perempuan<br>
            tanggal beli                 : <input type="date"  name="tgl">
            Masukkan Jumlah Buku         : <input type="number" name="jml">
    <br>
           <input type="submit" name="Submit" value="inputdata">
    </form>
    <hr>
<?php
    if (isset($_GET['Submit'])) {
        $a = $_GET['jml'];
        for ($i=0; $i < $a; $i++) {
        
    ?>
    <pre>
            <form action="proformarray.php" method="POST">
            <table>
            <tr>
            <td><label for=>Judul Buku     :</label></td>
            <td><input type="text" name="bilangan"></td>
            <td></td>
            <td><label for=>Kode Buku      :</label></td>
            <td><input type="text" name="pangkat"><br></td>
            <td><label for=>Nama Pengarang :</label></td>
            <td><input type="text" name="pengarang"></td>
            <td></td>
            <td>Jenis Buku    :<select name="jabatan">
                                          <option value="HRD">komik
                                          <option value="Manager">fiksi
                                          <option value="Staff">novel
                                          <option value="Karyawan">horor
                                          </option></select><br></td>
            </tr></table> 
    <?php
        }    
    ?>
            <tr>
            <input type="submit" name="sbm" value="Beli"> <input type="reset" value="Reset">
            </tr>
    <?php
    }
    ?>
            </form>
</fieldset>    
</body>
</html>