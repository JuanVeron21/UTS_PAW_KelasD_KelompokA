<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['pinjam'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama = $_POST['nama'];
        $buku_pinjam = $_POST['buku_pinjam'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_tempo = $_POST['tgl_tempo'];
        $tgl_kembali = $_POST['tgl_kembali'];
        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO pinjam(nama, buku_pinjam, tgl_pinjam, tgl_tempo,tgl_kembali)
                VALUES
            ('$nama','$buku_pinjam', '$tgl_pinjam', '$tgl_tempo', '$tgl_kembali')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query){
                echo
                    '<script>
                    alert("Create Data Success"); window.location = "../page/listPinjamanUser.php"
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