<?php
    $delete = $_POST['delete'];
    $allid = $_POST['allid'];
    switch ($delete) {
        case 'Cancel':
            header('location: ../view-all-records.php');
            break;

        case 'Continue':
                include('../connection/dbcon.php');
                $sql = "delete from records where recordID in ($allid)";
                mysqli_query($con, $sql);
                echo $sql;
                header('location: ../view-all-records.php');
            break;
    }
?>