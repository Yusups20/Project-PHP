<html>
<head><title>Latihan Form</title></head>
<body>
<center><b>TUGAS</b></center>
<FORM ACTION="prosestugas.php" METHOD="POST" NAME="input">

<pre>
                Nama                         :<input type="text" name="nama"><br>
                NIS                          :<input type="number" name="nis"><br>
                Alamat                       :<textarea name="alamat" cols="40"rows="5"></textarea><br>
                jenis kelamin                :<input type="radio" name="jurusan" value="Laki-Laki"> Laki-Laki <input type="radio" name="jurusan" value="Perempuan">Perempuan<br>
                Agama                        :<select name="agm">
                                              <option value="islam">islam
                                              <option value="Protestand">Protestand
                                              <option value="Konghucu">Konghucu
                                              <option value="Budha">Budha
                                              <option value="Katolik">Katolik
                                              </option>
                                              </select>

                Asal Sekolah                 :<input type="text" name="asal"><br>
                Nama Orang Tua/Wali          :<input type="text" name="ortu"><br>
                Mata Pelajaran Yang Di Sukai :
                <input type="checkbox" name="band01" value="Matematika"checked>Matematika<input type="checkbox" name="band02" value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam<input type="checkbox" name="band03" value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial
                <input type="checkbox" name="band04" value="Pendidikan Agama Islam">Pendidikan Agama Islam<input type="checkbox" name="band05" value="Bahasa Indonesia">Bahasa Indonesia<br>
                Total Nilai Ijasah SMK       :<input type="number" name="totalnilai"><br>
                email                        :<input type="email" name="email"><br>

                                              <input type="submit" name="InputData" value="InputData">            <input type="reset" name="reset" value="Reset">
</FORM>
</body>
</html>