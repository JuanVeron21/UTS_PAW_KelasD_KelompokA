<?php
    require('../db.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM peminjam where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id'];
            $sql =  "UPDATE peminjam set is_verified=1 where id=$id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo '<script>alert("verifikasi berhasil, silahkan Login");</script>';
                echo'<script>window.location= "../index.php"</script>';
            }else{
                echo "VERIFIKASI GAGAL ERROR : ".$query;
            }
        }else {
            echo "CODE TIDAK DITEMUKAN ATAU TIDAK VALID";
        }
    }else {
        echo "code ga nih";
    }

?>