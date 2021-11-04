<?php
    if(isset($_POST['editPinjam']))
    {

        include('../db.php');
        $id = $_GET['id']; 
        $nama = $_POST['nama'];
        $buku_pinjam = $_POST['buku_pinjam'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_tempo = $_POST['tgl_tempo'];
        $tgl_kembali = $_POST['tgl_kembali'];

        $queryUpdate = mysqli_query($con,"UPDATE pinjam SET nama='$nama', buku_pinjam='$buku_pinjam',tgl_pinjam='$tgl_pinjam',tgl_tempo='$tgl_tempo',tgl_kembali='$tgl_kembali' WHERE id='$id'") or die(mysqli_error($con));

        if($queryUpdate)
        {
            echo '<script>alert("Edit Data Success"); window.location = "../page/listBukuUser.php"</script>';
        }
        else
        {
        echo '<script>alert("Edit Data Failed");</script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>