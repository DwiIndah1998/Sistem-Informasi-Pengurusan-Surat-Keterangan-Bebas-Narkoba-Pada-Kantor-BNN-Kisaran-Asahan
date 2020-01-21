<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Keterangan Bebas Narkoba</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_pemohon" class="col-sm-3 control-label">Ruang Bebas Narkoba</label>
                               <div class="col-sm-6 col-xs-3">
                                <select name="ruang_pemohon" class="form-control">
                                    <option value="Data pemohon">Data Keterangan Bebas Narkoba</option>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nama_pemohon" class="col-sm-3 control-label">Nama pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemohon" class="form-control" id="inputEmail3" placeholder="Inputkan Nama pemohon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan NIK pemohon sesuai KK/KTP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin Dari pemohon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="umur" class="col-sm-3 control-label">Umur</label>
                            <div class="col-sm-9">
                                <input type="text" name="umur" class="form-control" id="inputEmail3" placeholder="Inputkan umur Dari pemohon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat dan Tanggal Lahir Dari pemohon" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Dari pemohon" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan"class="form-control" id="inputEmail3" placeholder="Inputkan Pekerjaan Dari pemohon" required>
                            </div>
                        </div>                      

						<div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_hp" class="form-control" id="inputPassword3" placeholder="Inputkan No Telepon/Hp pemohon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kesadaran" class="col-sm-3 control-label">Kesadaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kesadaran"class="form-control" id="inputEmail3" placeholder="Inputkan tingkat kesadaran Dari pemohon" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="keadaan" class="col-sm-3 control-label">Keadaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keadaan"class="form-control" id="inputEmail3" placeholder="Inputkan Tingkat Keadaan Dari pemohon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tekanan_daran" class="col-sm-3 control-label">Tekanan Darah</label>
                            <div class="col-sm-9">
                                <input type="text" name="tekanan_darah"class="form-control" id="inputEmail3" placeholder="Inputkan tingkat Tekanan Darah Dari pemohon" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nadi" class="col-sm-3 control-label">Nadi</label>
                            <div class="col-sm-9">
                                <input type="text" name="nadi"class="form-control" id="inputEmail3" placeholder="Inputkan Tingkat Denyut Nadi Dari pemohon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pernafasan" class="col-sm-3 control-label">Pernafasan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pernafasan"class="form-control" id="inputEmail3" placeholder="Inputkan Tingkat Pernafasan Dari pemohon" required>
                            </div>
                        </div>  

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=bebas&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data pemohon
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama_pemohon  =$_POST['nama_pemohon'];
	$nik           =$_POST['nik'];
    $jk            =$_POST['jk'];
	$umur          =$_POST['umur'];
    $tempat_lahir  =$_POST['tempat_lahir'];
    $alamat        =$_POST['alamat'];
	$pekerjaan     =$_POST['pekerjaan'];
    $no_hp         =$_POST['no_hp'];
    $kesadaran     =$_POST['kesadaran'];
    $keadaan       =$_POST['keadaan'];
    $tekanan_darah =$_POST['tekanan_darah'];
    $nadi          =$_POST['nadi'];
    $pernafasan    =$_POST['pernafasan'];
    //buat sql
    $sql="INSERT INTO tbl_keterangan VALUES ('$nama_pemohon','$nik','$jk','$umur','$tempat_lahir','$alamat','$pekerjaan','$no_hp',
                                          '$kesadaran','$keadaan','$tekanan_darah','$nadi','$pernafasan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Keterangan Bebas Narkoba Error");
    if ($query){
        echo "<script>window.location.assign('?page=bebas&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
