<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Keterangan Bebas Narkoba</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Keterangan Bebas Narkoba BNN Kisaran Kab. Asahan </h2>
                        <h4>Jl. Jend. Sudirman/Ling. Pemkab.Asahan-kisaran, Kab. Asahan</h4>
                        <hr>
                        <h3>DATA SELURUH KETERANGAN BEBAS NARKOBA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
    								<tr>
                                        <th>No</th><th>Nama</th><th>Nik</th><th>Jenis Kelamin</th><th>TTL</th><th>Alamat</th><th>Pekerjaan</th><th>NoHp</th><th>Kesadaran</th><th>Kondisi Tubuh</th>
                                        <th>Tekanan Darah</th><th>Denyut Nadi</th><th>Pernafasan</th>
                                    </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_keterangan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nama_pemohon'] ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['kesadaran'] ?></td>
                                    <td><?= $data['keadaan'] ?></td>
                                    <td><?= $data['tekanan_darah'] ?></td>
                                    <td><?= $data['nadi'] ?></td>
                                    <td><?= $data['pernafasan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>