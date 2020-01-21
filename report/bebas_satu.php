<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Keterangan Bebas Narkoba</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_keterangan WHERE nama_pemohon='" . $_GET['nama_pemohon']. "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Keterangan Bebas Narkoba BNN Kisaran Kab. Asahan </h2>
                        <h4>Jl. Jend. Sudirman/Ling. Pemkab.Asahan-kisaran, Kab. Asahan</h4>
                        <hr>
                        <h3>DATA KETERANGAN BEBAS NARKOBA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama pemohon</td> <td><?= $data['nama_pemohon'] ?></td>
                                </tr>
                                </tr>                        <tr>
                                    <td>NIK pemohon</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Umur</td> <td><?= $data['umur'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat/Tanggal Lahir Pemohon</td> <td><?= $data['tempat_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat pemohon</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>No Telp/Hp</td> <td><?= $data['no_hp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tingkat Kesadaran</td> <td><?= $data['kesadaran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tingkat Keadaan/Kondisi Tubuh</td> <td><?= $data['keadaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tingkat Tekanan Darah</td> <td><?= $data['tekanan_darah'] ?></td>
                                </tr>
                                <tr>
                                    <td>Denyut Nadi</td> <td><?= $data['nadi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tingkat Pernafasan</td> <td><?= $data['pernafasan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                
                                <tr>
                                    <td colspan="2" class="text-right">
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