<?php
    require('db-functions.php');

    $query = addRecord($_POST, 'records');
    //echo $query;
    
    include('../connection/dbcon.php');
    $result = mysqli_query($con, $query);
    
    if($result){
        header('location: ../view-all-records.php');
    }else{
        header('location: ../add-record.php?msg=1'); 
    }
?>