
<?php 
    if($_GET['id_pegawai']){
        include "koneksii.php";
        $qry_hapus=mysqli_query($conn,"delete from pegawai where id_pegawai ='".$_GET['id_pegawai']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus pegawai');location.href='tampil_pegawai.php';</script>";
        }
    }
?>