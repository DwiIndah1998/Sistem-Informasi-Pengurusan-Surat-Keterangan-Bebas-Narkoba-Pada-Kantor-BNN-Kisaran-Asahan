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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pemohon</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>ID Pemohon</th><th>Nama</th><th>Nik</th><th>Jenis Kelamin</th><th>Umur</th><th>Tempat/Tgl Lahir</th>
                                <th>Alamat</th><th>Pekerjaan</th><th>Status</th><th>Tujuan</th><th>No Telp</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_pemohon";
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
                                    <td><?= $data['id_pemohon'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['umur'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['tujuan'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td>
                                        <a href="?page=pemohon&actions=detail&id=<?= $data['id_pemohon'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=pemohon&actions=edit&id=<?= $data['id_pemohon'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=pemohon&actions=delete&id=<?= $data['id_pemohon'] ?>" class="btn btn-danger btn-xs">
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
                                    <a href="?page=pemohon&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Pelapor

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

