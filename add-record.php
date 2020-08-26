<?php include('header.php') ?>
<div class="container">
        <div class="row">
            <div class="col-md-1">
            
            </div>
            <div class="col-md-10">
            <?php
                $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
                if ($msg == 1) {
                    echo '<div class="alert alert-danger" role="alert">Error: Email address already exist, please try another!</div>';
                }
            ?>
            <p class="lead text-center">Kindly Add a Record</p>
            <form class="needs-validation" novalidate method="post" action="actions/add-record.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="first_name" required>
                        <div class="invalid-feedback">
                            Please provide your first name.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" name="last_name" required>
                        <div class="invalid-feedback">
                            Please provide your last name.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPhoneNumber">Phone Number</label>
                        <input type="text" placeholder="024XXXXXXX" class="form-control" id="inputPhoneNumber" name="phone_number" required>
                        <div class="invalid-feedback">
                            Please provide a working phone number.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDOB">Date of Birth</label>
                        <input type="date" class="form-control" id="inputDOB" name="dob" required>
                        <div class="invalid-feedback">
                            Please provide your date of birth.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="InputEmail">Email address</label>
                        <input placeholder="ama@email.com" type="email" class="form-control" id="InputEmail" name="email" required>
                        <div class="invalid-feedback">
                            Please provide a working email address.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRegion">Select Region</label>
                        <select class="custom-select" id="inputRegion" name="region" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Ahafo Region">Ahafo</option>
                            <option value="Ashanti Region">Ashanti</option>
                            <option value="Bono Region">Bono</option>
                            <option value="Bono East Region">Bono East</option>
                            <option value="Central Region">Central</option>
                            <option value="Eastern Region">Eastern</option>
                            <option value="Greater Accra Region">Greater Accra</option>
                            <option value="North East Region">North East</option>
                            <option value="Northern Region">Northern</option>
                            <option value="Oti Region">Oti</option>
                            <option value="Savannah Region">Savannah</option>
                            <option value="Upper East Region">Upper East</option>
                            <option value="Upper West Region">Upper West</option>
                            <option value="Volta Region">Volta</option>
                            <option value="Western North Region">Western North</option>
                            <option value="Western Region">Western</option>                        
                        </select>
                        <div class="invalid-feedback">
                            Please select your region.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputMessage">Your Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Kindly enter your desired message here" name="message"></textarea>
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
