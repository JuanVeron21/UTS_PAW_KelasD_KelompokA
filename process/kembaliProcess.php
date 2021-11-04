<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryKembali = mysqli_query($con, "DELETE FROM pinjam WHERE id='$id'") or die(mysqli_error($con));
        if($queryKembali){
            echo
                '<script>
                alert("Delete Success"); window.location = "../page/listPinjamanUser.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Delete Failed"); window.location = "../page/listPinjamanUser.php"
                </script>';
        }
    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
