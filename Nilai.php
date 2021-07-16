<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Studycle Assesment</title>
</head>

<body>
    <div class="container">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Siswa</h3>
                    <a href="tambah.php" type="button" class="btn btn-primary btn-lg btn-block">Tambah Data Siswa</a>
                </div><!-- /.box-header -->
                <br>
                <br>
                <div class="box-body">
                    <div class='table-responsive'>
                        <table id="example1" class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th style='width:30px'>No</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Nilai Tugas</th>
                                    <th>Nilai Uts</th>
                                    <th>Nilai Final</th>
                                    <th>Nilai Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM studycle");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nim'] ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['tugas'] ?></td>
                                        <td><?php echo $row['uts'] ?></td>
                                        <td><?php echo $row['final'] ?></td>
                                        <td><?php echo $row['totalnilai']  ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <div class="container" >
		<center style="width: 150px;">
			<a href="Index.php" type="button" class="btn btn-success btn-lg btn-block">Home</a>
		</center>
		
	</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>