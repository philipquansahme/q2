<?php include('header.php') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        
        </div>
        <div class="col-md-10">
        <form method="post" action="actions/list-action.php">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col" colspan="6" class="text-right">
                            <a class="btn btn-primary text-white" href="add-record.php">Add New Record</a>
                        </th>
                    </tr>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Region</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $end = 5;
                    $cp = (isset($_GET['cp'])) ? $_GET['cp'] : 1;
                    $start = ($cp-1)*$end;
                    $sql = "select * from records limit $start,$end";
                    include('connection/dbcon.php');
                    $result = mysqli_query($con, $sql);
                    $i = 1;
                    while($data = mysqli_fetch_assoc($result)){
                        $recordid = $data['recordID'];
                        echo "<tr>
                                <td></td>
                                <td>".$data['first_name']. ' '. $data['last_name'] ."</td>
                                <td>".$data['email']."</td>
                                <td>".$data['phone_number']."</td>
                                <td>".$data['region']."</td>
                                <td>    
                                    <a href='edit-record.php?recordid=$recordid' class='btn btn-success'>Edit</a> | 
                                    <a href='view-record.php?recordid=$recordid' class='btn btn-info'>Details</a> | 
                                    <a href='delete-record.php?allid=$recordid' class='btn btn-danger'>Delete</a> 
                                </td>
                            </tr>";
                            $i++;    
                    }

                    $second_sql = "select * from records";
                    $secod_result = mysqli_query($con, $second_sql);
                    $num = mysqli_num_rows($secod_result);
                    $num_pages = ceil($num/$end);
                ?>
                    <tr>
                        <th scope="col" colspan="8">
                            <?php
                                for ($w=1; $w<$num_pages+1 ; $w++) { 
                                    if ($w ==$cp) {
                                        echo $w;
                                    }else{
                                        echo "&nbsp; <a href='?cp=$w'>$w</a> &nbsp;";
                                    }
                                }
                                $plural = ($num_pages > 1) ? "s": "";
                                echo " |    page $cp of $num_pages page$plural";
                            ?>
                        </th>
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
        <div class="col-md-1">
        
        </div>
    </div>
</div>
<?php include('footer.php') ?>
