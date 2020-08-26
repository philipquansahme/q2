<?php include('header.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            
            </div>
            <div class="col-md-8">
                <?php
                    $allid = $_GET['allid'];
                    echo "
                        <form method='post' action='actions/detele-record.php'>
                            <table width='700' align='center'>
                                <tr>
                                    <th colspan='2'>
                                        <h3>Are you sure you want to delete the record(s)</h3>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type='hidden' name='allid' value='$allid'>
                                        <input type='submit' name='delete' class='btn btn-primary' value='Cancel'>
                                    </th>
                                    <th>
                                        <input type='submit' name='delete' class='btn btn-danger' value='Continue'>
                                    </th>
                                </tr>
                            </table>
                        </form>
                    "
                ?>
            </div>
            <div class="col-md-2">
            
            </div>
        </div>
    </div>
<?php include('footer.php');?>