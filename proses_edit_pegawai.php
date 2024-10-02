<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $nik=$_POST['nik'];
    $pasword=$_POST['pasword'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    $jabatan_id=$_POST['jabatan_id'];
    if(empty($nik)){
        echo "<script>alert('NIK pegawai tidak boleh kosong');location.href='edit_pegawai.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='edit_pegawai.php';</script>";
    } else {
        include "koneksii.php";
        if(empty($pasword)){
            $update=mysqli_query($conn,"update pegawai set nik='".$nik."',pasword='".$pasword."', nama='".$nama."',  alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_tlp='".$no_tlp."', jabatan_id='".$jabatan_id."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update Pegawai');location.href='edit_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update pegawai set nik='".$nik."',nama='".$nama."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_tlp='".$no_tlp."', pasword='".md5($pasword)."', jabatan_id='".$jabatan_id."' where id_pegawai = '".$id_pegawai."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update Pegawai');location.href='edit_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        }
        
    } 
}
?>

