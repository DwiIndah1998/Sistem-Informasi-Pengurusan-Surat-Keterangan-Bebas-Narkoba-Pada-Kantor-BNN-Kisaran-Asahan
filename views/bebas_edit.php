<?php
$nama_pemohon=$_GET['nama_pemohon'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_keterangan WHERE nama_pemohon ='$nama_pemohon'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Keterangan Bebas Narkoba</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

						<div class="form-group">
                            <label for="nama_pemohon" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemohon" value="<?=$data['nama_pemohon']?>"class="form-control" id="inputEmail3" placeholder="Nama pemohon">
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
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Telp/HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id="inputPassword3" placeholder="Nomor telp/Hp">
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="kesadaran" class="col-sm-3 control-label">Kesadaran</label>
                                <div class="col-sm-9">
                                    <input type="text" name="kesadaran" value="<?=$data['kesadaran']?>"class="form-control" id="inputEmail3" placeholder="Tingkat Kesadaran pemohon" >
                                </div>
                        </div>
                     
                        <div class="form-group">
                                <label for="keadaan" class="col-sm-3 control-label">Keadaan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="keadaan" value="<?=$data['keadaan']?>"class="form-control" id="inputEmail3" placeholder="Tingkat Keadaan dari Pemohon" >
                                </div>
                       </div>

                       <div class="form-group">
                                <label for="tekanan_darah" class="col-sm-3 control-label">Tekanan Darah</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tekanan_darah" value="<?=$data['tekanan_darah']?>"class="form-control" id="inputEmail3" placeholder="Tingakat Tekanan Darah dari pemohon" >
                                </div>
                        </div>
                     
                        <div class="form-group">
                                <label for="nadi" class="col-sm-3 control-label">Denyut Nadi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nadi" value="<?=$data['nadi']?>"class="form-control" id="inputEmail3" placeholder="Tingkat Denyut Nadi dari Pemohon" >
                                </div>
                       </div>

                       <div class="form-group">
                                <label for="pernafasan" class="col-sm-3 control-label">Tingkat Pernafasan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pernafasan" value="<?=$data['pernafasan']?>"class="form-control" id="inputEmail3" placeholder="Tingkat Pernafasan dari Pemohon" >
                                </div>
                       </div>
                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Keterangan Bebas Narkoba</button>
                            </div>
                        </div>
                    </form>
                  </div>

                <div class="panel-footer">
                    <a href="?page=bebas&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Keterangan Bebas Narkoba
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
    $sql="UPDATE tbl_keterangan SET nama_pemohon='$nama_pemohon',nik='$nik',jk='$jk',umur='$umur',tempat_lahir='$tempat_lahir',
	alamat='$alamat',pekerjaan='$pekerjaan',no_hp='$no_hp',kesadaran='$kesadaran',keadaan='$keadaan',tekanan_darah='$tekanan_darah', 
    nadi='$nadi',pernafasan='$pernafasan' WHERE nama_pemohon='$nama_pemohon'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=bebas&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



