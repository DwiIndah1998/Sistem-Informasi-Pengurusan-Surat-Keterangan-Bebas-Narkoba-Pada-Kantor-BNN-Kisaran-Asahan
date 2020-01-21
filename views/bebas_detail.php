<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pemohon</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail pemohon-->
                    <?php
                    $sql = "SELECT * FROM tbl_keterangan WHERE nama_pemohon ='" . $_GET ['nama_pemohon'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
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
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=bebas&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Keterangan Bebas Narkoba </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

