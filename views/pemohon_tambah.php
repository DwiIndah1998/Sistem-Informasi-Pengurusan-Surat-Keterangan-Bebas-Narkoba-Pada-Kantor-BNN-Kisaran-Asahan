<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pemohon</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_pemohon" class="col-sm-3 control-label">Ruang Pemohon</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_pemohon" class="form-control">
                                    <option value="Data pemohon">Data Pemohon</option>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="id_pemohon" class="col-sm-3 control-label">ID pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pemohon" class="form-control" id="inputEmail3" placeholder="Inputkan ID pemohon" required>
                            </div>
                        </div>


						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama pemohon" required>
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

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status"class="form-control" id="inputEmail3" placeholder="Inputkan Status perkawinan Dari pemohon" required>
                            </div>
                        </div>
                        <!--Akhir Status-->

                         <div class="form-group">
                            <label for="tujuan" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan"class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan Dari pemohon" required>
                            </div>
                        </div> 

						<div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_hp" class="form-control" id="inputPassword3" placeholder="Inputkan No Telepon/Hp pemohon">
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
                    <a href="?page=pemohon&actions=tampil" class="btn btn-danger btn-sm">
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
	$id            =$_POST['id_pemohon'];
	$nama          =$_POST['nama'];
	$nik           =$_POST['nik'];
    $jk            =$_POST['jk'];
	$umur          =$_POST['umur'];
    $tempat_lahir  =$_POST['tempat_lahir'];
    $alamat        =$_POST['alamat'];
	$pekerjaan     =$_POST['pekerjaan'];
    $status        =$_POST['status'];
    $tujuan        =$_POST['tujuan'];
    $no_hp         =$_POST['no_hp'];
    //buat sql
    $sql="INSERT INTO tbl_pemohon VALUES ('$id','$nama','$nik','$jk','$umur','$tempat_lahir','$alamat','$pekerjaan','$status','$tujuan','$no_hp')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data pemohon Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemohon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
