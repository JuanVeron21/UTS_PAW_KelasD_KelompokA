<?php
    if(isset($_GET['np'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete2 = mysqli_query($con, "DELETE FROM peminjam WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete2){
            echo
                '<script>
                alert("Delete Success"); window.location = "../page/listUser.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Delete Failed"); window.location = "../page/listUser.php"
                </script>';
        }
    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
