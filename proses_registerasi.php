<?php
if($_POST){
    $nik=$_POST['nik'];
    $pasword= $_POST['pasword'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp= $_POST['no_tlp'];
    $jabatan_id= $_POST['jabatan_id'];
    if(empty($username)){
        echo "<script>alert('nik pegawai tidak boleh kosong');location.href='registerasi.php';</script>";

    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='registerasi.php';</script>";
    } elseif(empty($pasword)){
        echo "<script>alert('password tidak boleh kosong');location.href='registerasi.php';</script>";
    } else {
        include "koneksii.php";
        $insert=mysqli_query($conn,"insert into pegawai (nik, pasword, nama, alamat, username, jenis_kelamin, no_tlp, jabatan_id) value ('".$nik."','".md5($pasword)."','".$nama."','".$alamat."', '".$username."', '".$jenis_kelamin."','".$no_tlp."','".$jabatan_id."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='loginn.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='registerasi.php';</script>";
        }
    }
}