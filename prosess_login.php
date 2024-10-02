<?php 
    if($_POST){
        $username=$_POST['username'];
        $pasword=$_POST['pasword'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='loginn.php';</script>";
        } elseif(empty($pasword)){
            echo "<script>alert('Password tidak boleh kosong');location.href='loginn.php';</script>";
        } else {
            include "koneksii.php";
            $qry_login=mysqli_query($conn,"select * from pegawai where username = '".$username."' and pasword = '".md5($pasword)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pegawai']=$dt_login['id_pegawai'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_loginn']=true;
                header("location: Home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='loginn.php';</script>";
            }
        }
    }
?>