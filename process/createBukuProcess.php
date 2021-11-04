<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahBuku'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $judul = $_POST['judul'];
        $jenis = $_POST['jenis'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $stok = $_POST['stok'];
        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO book(judul, jenis, penulis, penerbit, tahun,stok)
                VALUES
            ('$judul','$jenis', '$penulis', '$penerbit','$tahun','$stok')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query){
                echo
                    '<script>
                    alert("Create Data Success"); window.location = "../page/listAdmin.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Create Data Failed");
                    </script>';
            }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>