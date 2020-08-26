<?php
    $recordid = $_GET['recordid'];
    $sql = "select * from records where recordID=$recordid";
    include('connection/dbcon.php');
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
?>
<?php include('header.php') ?>
<div class="container">
        <div class="row">
            <div class="col-md-1">
            
            </div>
            <div class="col-md-10">
            <?php
                $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
                if ($msg == 1) {
                    echo '<div class="alert alert-danger" role="alert">EError: Email address already exist, please try another!</div>';
                }
            ?>
            <p class="lead text-center">Edit a Record</p>
            <form class="needs-validation" novalidate method="post" action="actions/edit-record.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">First Name</label>
                        <input type="hidden" name="recordID" value="<?php echo $recordid; ?>">
                        <input type="text" class="form-control" id="inputFirstName" name="first_name" value="<?php echo $data['first_name'] ?>" required>
                        <div class="invalid-feedback">
                            Please provide your first name.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" name="last_name" value="<?php echo $data['last_name'] ?>" required>
                        <div class="invalid-feedback">
                            Please provide your last name.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPhoneNumber">Phone Number</label>
                        <input type="text" placeholder="024XXXXXXX" class="form-control" id="inputPhoneNumber" name="phone_number"  value="<?php echo $data['phone_number'] ?>"required>
                        <div class="invalid-feedback">
                            Please provide a working phone number.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDOB">Date of Birth</label>
                        <input type="date" class="form-control" id="inputDOB" name="dob" value="<?php echo $data['dob'] ?>" required>
                        <div class="invalid-feedback">
                            Please provide your date of birth.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="InputEmail">Email address</label>
                        <input placeholder="ama@email.com" type="email" class="form-control" id="InputEmail" name="email" value="<?php echo $data['email'] ?>" required>
                        <div class="invalid-feedback">
                            Please provide a working email address.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRegion">Select Region</label>
                        <select class="custom-select" id="inputRegion" name="region" required>
                            <option value="Ahafo Region" <?php if($data['region'] == 'Ahafo Region') { echo 'selected';}?>>Ahafo</option>
                            <option value="Ashanti Region" <?php if($data['region'] == 'Ashanti Region') { echo 'selected';}?>>Ashanti</option>
                            <option value="Bono Region" <?php if($data['region'] == 'Bono Region') { echo 'selected';}?>>Bono</option>
                            <option value="Bono East Region" <?php if($data['region'] == 'Bono East Region') { echo 'selected';}?>>Bono East</option>
                            <option value="Central Region" <?php if($data['region'] == 'Central Region') { echo 'selected';}?>>Central</option>
                            <option value="Eastern Region" <?php if($data['region'] == 'Eastern Region') { echo 'selected';}?>>Eastern</option>
                            <option value="Greater Accra Region" <?php if($data['region'] == 'Greater Accra Region') { echo 'selected';}?>>Greater Accra</option>
                            <option value="North East Region" <?php if($data['region'] == 'North East Region') { echo 'selected';}?>>North East</option>
                            <option value="Northern Region" <?php if($data['region'] == 'Northern Region') { echo 'selected';}?>>Northern</option>
                            <option value="Oti Region" <?php if($data['region'] == 'Oti Region') { echo 'selected';}?>>Oti</option>
                            <option value="Savannah Region" <?php if($data['region'] == 'Savannah Region') { echo 'selected';}?>>Savannah</option>
                            <option value="Upper East Region" <?php if($data['region'] == 'Upper East Region') { echo 'selected';}?>>Upper East</option>
                            <option value="Upper West Region" <?php if($data['region'] == 'Upper West Region') { echo 'selected';}?>>Upper West</option>
                            <option value="Volta Region" <?php if($data['region'] == 'Volta Region') { echo 'selected';}?>>Volta</option>
                            <option value="Western North Region" <?php if($data['region'] == 'Western North Region') { echo 'selected';}?>>Western North</option>
                            <option value="Western Region" <?php if($data['region'] == 'Western Region') { echo 'selected';}?>>Western</option>                        
                        </select>
                        <div class="invalid-feedback">
                            Please select your region.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputMessage">Your Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Kindly enter your desired message here" name="message"><?php echo $data['message'] ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-1">
            
            </div>
        </div>
    </div>
<?php include('footer.php') ?>
