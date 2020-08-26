<?php
    $recordid = $_GET['recordid'];
    $sql = "select * from records where recordID=$recordid";
    include('connection/dbcon.php');
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
?>
<?php include('header.php');?>
<div class="container">
        <div class="row">
            <div class="col-md-2">
            
            </div>
            <div class="col-md-8">
                <table width="800" align="center">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-right">
                                
                                <a class="btn btn-success text-white" href="edit-record.php?recordid=<?php echo $recordid; ?>">Edit This Record</a>
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <td>First Name: </td>
                        <td><?php echo $data['first_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><?php echo $data['last_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number: </td>
                        <td><?php echo $data['phone_number']; ?></td>
                    </tr>
                    <tr>
                        <td>Date of Age: </td>
                        <td><?php echo $data['dob']; ?></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Region: </td>
                        <td><?php echo $data['region']; ?></td>
                    </tr>
                    <tr>
                        <td>Message: </td>
                        <td><?php echo $data['message']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
            
            </div>
        </div>
    </div>
<?php include('footer.php');?>

