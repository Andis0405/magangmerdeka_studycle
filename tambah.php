<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>TAMBAH DATA SISWA</h2>
                    </div>
                    <br>
                    <div class="card-body">

                        <form action="proses.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="nim" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nilai Tugas</label>
                                <input type="text" name="tugas" placeholder="Masukkan Nilai Tugas" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nilai Uts</label>
                                <input type="text" name="uts" placeholder="Masukkan Nilai Uts" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nilai Final</label>
                                <input type="text" name="final" placeholder="Masukkan NNilai Final" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include "koneksi.php";
if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into marketplace1 set
    nim = '$_POST[nim]',
    nama = '$_POST[nama]',
    nilai_tgs = '$_POST[nilai_tgs]',
    nilai_uts = '$_POST[nilai_uts]',
    nilai_final = '$_POST[nilai_final]',
    rata_rata = '$_POST[rata_rata]'
    ");
    echo "Berhasil";
}
?>