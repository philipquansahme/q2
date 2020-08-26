<?php
    require('db-functions.php');

    $query = editRecord($_POST, 'records', 'recordID');
    //echo $query;

    include('../connection/dbcon.php');
    $result = mysqli_query($con, $query);
    if($result){
        header('location: ../view-all-records.php');
    }else{
        header('location: add-member.php?msg=1'); 
    }
?>