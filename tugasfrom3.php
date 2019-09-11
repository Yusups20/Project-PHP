<html>
<head><title>Latihan Form3</title></head>
<body>
<center><b>FORM PENGGAJIAN</b></center>
<fieldset>
<FORM ACTION="prosestugas3.php" METHOD="POST" NAME="input">

<pre>
            Nama                         :<input type="text" name="nama"><br>
            NIP                          :<input type="number" name="nip"><br>
            jenis kelamin                :<input type="radio" name="jurusan" value="Laki-Laki"> Laki-Laki <input type="radio" name="jurusan" value="Perempuan">Perempuan<br>
            Alamat                       :<textarea name="alamat" cols="40"rows="5"></textarea><br>
            Status                       :<select name="stat">
                                          <option value="Menikah">Menikah
                                          <option value="BelumMenikah">Belum Menikah
                                          </option></select><br>
            Jabatan                      :<select name="jabatan">
                                          <option value="HRD">HRD
                                          <option value="Manager">Manager
                                          <option value="Staff">Staff
                                          <option value="Karyawan">Karyawan
                                          </option></select><br>
            Potongan                     : <input type="checkbox" name="pot1" value="BPJS">BPJS<input type="checkbox" name="pot2" value="Koperasi">Koperasi<input type="checkbox" name="pot3" value="Jamsostek">Jamsostek<br>
                
            Golongan                     :<select name="gol">
                                          <option value="A1">A1
                                          <option value="A2">A2
                                          <option value="A3">A3
                                          </option></select><br>
                                          
                                          <input type="submit" name="InputData" value="InputData">            <input type="reset" name="reset" value="Reset">
</FORM>
</fieldset>
</body>
</html>