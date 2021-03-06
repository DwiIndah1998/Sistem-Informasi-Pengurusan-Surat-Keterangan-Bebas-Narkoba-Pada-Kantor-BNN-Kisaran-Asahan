<div class="">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Keterangan Bebas Narkoba</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama</th><th>Nik</th><th>JnsKelamin</th><th>TTL</th><th>Alamat</th><th>Pekerjaan</th><th>NoHp</th><th>Sadar</th><th>Tubuh</th>
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
                                        <a href="report/bebas_satu.php?nama_pemohon=<?= $data['nama_pemohon'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/bebas_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Keterangan Bebas Narkoba

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

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="" title="Close" class="close">X</a>

        <form  target="_blank" action="report/bebas_perbulan.php" method="post">
        <h4>Pilih bulan </h4>
        <select name="bulan" class="form-control">
          <option value="12"> Desember </option>
          <option value="11"> November </option>
          <option value="10"> Oktober </option>
          <option value="09"> September </option>
          <option value="08"> Agustus </option>
          <option value="07"> Juli </option>
          <option value="06"> Juni </option>
          <option value="05"> Mei </option>
          <option value="04"> April </option>
          <option value="03"> Maret </option>
          <option value="02"> Februari </option>
          <option value="01"> Januari </option>
        </select>
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?tahun=$i?>"> <?tahun=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="" title="Close" class="close">X</a>

        <form  target="_blank" action="report/bebas_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?tahun=$i?>"> <?tahun=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>
