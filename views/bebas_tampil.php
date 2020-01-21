<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Keterangan Bebas Narkoba</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama</th><th>Nik</th><th>JnsKelamin</th><th>TTL</th><th>Alamat</th>
                                <th>Pekerjaan</th><th>NoHp</th><th>Sadar</th><th>Tubuh</th>
                                <th>Darah</th><th>Nadi</th><th>Nafas</th><th>ACTIONS</th>
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
                                    <td>
                                        <a href="?page=bebas&actions=detail&nama_pemohon=<?= $data['nama_pemohon'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=bebas&actions=edit&nama_pemohon=<?= $data['nama_pemohon'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=bebas&actions=delete&nama_pemohon=<?= $data['nama_pemohon'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=bebas&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Keterangan Bebas Narkoba

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

