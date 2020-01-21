<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_keterangan WHERE nama_pemohon ='".$_GET['nama_pemohon']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=bebas&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=bebas&actions=tampil');</scripr>";
}

