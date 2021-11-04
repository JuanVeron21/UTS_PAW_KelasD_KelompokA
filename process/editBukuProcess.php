<?php
    if(isset($_POST['editBuku']))
    {

        include('../db.php');
        $id = $_GET['id']; 
        $judul = $_POST['judul'];
        $jenis = $_POST['jenis'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $stok = $_POST['stok'];

        $queryUpdate = mysqli_query($con,"UPDATE book SET judul='$judul', jenis='$jenis',penulis='$penulis',penerbit='$penerbit',tahun='$tahun',stok='$stok' WHERE id='$id'") or die(mysqli_error($con));

        if($queryUpdate)
        {
            echo '<script>alert("Edit Data Success"); window.location = "../page/listAdmin.php"</script>';
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