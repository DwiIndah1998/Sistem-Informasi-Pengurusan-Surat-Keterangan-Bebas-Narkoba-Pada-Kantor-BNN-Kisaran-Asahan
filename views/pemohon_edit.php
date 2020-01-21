<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pemohon WHERE id_pemohon ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pelpaor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="id_pemohon" class="col-sm-3 control-label">ID pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pemohon" value="<?=$data['id_pemohon']?>"class="form-control" id="inputEmail3" placeholder="Id pemohon">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama pemohon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama pemohon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="NIk dari pemohon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" >
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="umur" class="col-sm-3 control-label">Umur</label>
                                <div class="col-sm-9">
                                    <input type="text" name="umur" value="<?=$data['umur']?>"class="form-control" id="inputEmail3" placeholder="Umur Pemohon" >
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat dan Tanggal Lahir dari Pemohon">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

						<div class="form-group">
                                <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>"class="form-control" id="inputEmail3" placeholder="Pekerjaan" >
                                </div>
                       </div>	

                       <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status Perkawinan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="status" value="<?=$data['status']?>"class="form-control" id="inputEmail3" placeholder="Status Perkawinan pemohon" >
                                </div>
                        </div>
                     
                        <div class="form-group">
                                <label for="tujuan" class="col-sm-3 control-label">Tujuan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tujuan" value="<?=$data['tujuan']?>"class="form-control" id="inputEmail3" placeholder="Tujuan" >
                                </div>
                       </div>                       

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Telp/HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id="inputPassword3" placeholder="Nomor telp/Hp">
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data pemohon</button>
                            </div>
                        </div>
                    </form>
                  </div>

                <div class="panel-footer">
                    <a href="?page=pemohon&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemohon
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_pemohon    =$_POST['id_pemohon'];
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
    $sql="UPDATE tbl_pemohon SET id_pemohon='$id_pemohon',nama='$nama',nik='$nik',jk='$jk',umur='$umur',tempat_lahir='$tempat_lahir',
	alamat='$alamat',pekerjaan='$pekerjaan',status='$status',tujuan='$tujuan',no_hp='$no_hp' WHERE id_pemohon ='$id_pemohon'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemohon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



