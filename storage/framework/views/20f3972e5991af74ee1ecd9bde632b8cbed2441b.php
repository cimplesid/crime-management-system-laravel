<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="border: 1px solid black">
            <p style="font-family: Century;">There are several different incident types that can be entered online.
            <i style="color: red;">If the incident you are reporting is an emergency, please call 999 instead of using this form.</i><br>
            Note: Filing a false Police Report is a crime.</p>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center; font-family: Bernard MT Condensed;">Robbery FIR</h3>
            <div class="panel panel-primary">

                <?php if($errors->has()): ?>
            <div class="alert alert-danger">
                <?php foreach($errors->all() as $error): ?>
                    <?php echo e($error); ?><br>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        <?php if(Session::has('submitmsg')): ?>
            <div class='alert alert-success'>
            <strong>Success!</strong> <?php echo Session::get('submitmsg'); ?>

            <?php foreach($results as $key=>$number): ?>
            <p style="color:red;"> Your Complaint Number is:&nbsp;<?php echo e($number->rand); ?></p>
            <p style="color:blue;">Note this Complaint Number for further query.Thank You</p>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>


                <div class="panel-body">
                <h4 style="color: #00acc1;">Enter Reporting Person Information:-</h4>
                    <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                    <p>Please enter your information as completely as possible. You may be contacted regarding this incident. An email address is required if you would like to be notified when this report is received and approved.</p>
                    </div>
                    <hr>
        <form method="POST" action="/robbery" novalidate class="form-horizontal" role="form">

            <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Enter Your First Name" >
                <?php if($errors->has('first_name')): ?> <p class="help-block"><?php echo e($errors->first('first_name')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                    <?php if($errors->has('last_name')): ?> <p class="help-block"><?php echo e($errors->first('last_name')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Home Address</label>
                <div class="col-sm-10">
                    Street Address<input type="text" id="address" class="form-control" name="street_address_home" placeholder="Enter Your Home Street Address">
                    <?php if($errors->has('street_address_home')): ?> <p class="help-block"><?php echo e($errors->first('street_address_home')); ?></p> <?php endif; ?>
                    <div class="col-sm-4">
                    City<input type="text" id="address" class="form-control" name="city" placeholder="Enter Your City">
                    <?php if($errors->has('city')): ?> <p class="help-block"><?php echo e($errors->first('city')); ?></p> <?php endif; ?>
                    Zip Code<input type="text" id="address" class="form-control" name="zip_code" placeholder="Enter Your Zip Code">
                    <?php if($errors->has('zip_code')): ?> <p class="help-block"><?php echo e($errors->first('zip_code')); ?></p> <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Contact Number</label>
                <div class="col-sm-4">
                    <input type="text" id="phone" class="form-control" name="phone_number" placeholder="ex: +880171-0000000">
                    <?php if($errors->has('phone_number')): ?> <p class="help-block"><?php echo e($errors->first('phone_number')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" class="form-control" name="email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                    <?php if($errors->has('email')): ?> <p class="help-block"><?php echo e($errors->first('email')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm_email" class="col-sm-2 control-label">Confirm Email</label>
                <div class="col-sm-10">
                    <input type="email" id="confirm_email" class="form-control" name="confirm_email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                    <?php if($errors->has('confirm_email')): ?> <p class="help-block"><?php echo e($errors->first('confirm_email')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="gender" value="Male">Male</label>
                        <label><input type="radio" name="gender" value="Female">Female</label>
                        <?php if($errors->has('gender')): ?> <p class="help-block"><?php echo e($errors->first('gender')); ?></p> <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-2">
                    <select name="day" id="dob" class="form-control">
                        <option value="">Day</option>
                        <option value="">--------------</option>

                        <?php
                        for ($d=01; $d <= 31; $d++) {
                            if(strlen($d) == 1){
                                $d = "0$d";
                            }
                            echo "<option value=\"$d\">$d</option>";
                        }
                        ?>

                    </select>
                    <?php if($errors->has('day')): ?> <p class="help-block"><?php echo e($errors->first('day')); ?></p> <?php endif; ?>
                </div>
                <div class="col-sm-2">
                    <select name="month" id="dob" class="form-control">
                        <option value="">Month</option>
                        <option value="">---------------</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <?php if($errors->has('month')): ?> <p class="help-block"><?php echo e($errors->first('month')); ?></p> <?php endif; ?>
                </div>
                <div class="col-sm-2">
                    <select name="year" id="dob" class="form-control">
                        <option value="">Year</option>
                        <option value="">---------------</option>

                        <?php
                        for ($y=2016; $y >= 1900; $y--) {
                            echo "<option value=\"$y\">$y</option>";
                        }
                        ?>

                    </select>
                    <?php if($errors->has('year')): ?> <p class="help-block"><?php echo e($errors->first('year')); ?></p> <?php endif; ?>
                </div>
                </div>

                <?php /*reporting person information end*/ ?>
                <?php /*robbery incident start*/ ?>
                <hr>
                <h4 style="color: #00acc1;">Enter Incident Information:-</h4>
                <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                        <p>Please enter all the information that applies. If you do not know the address of the incident, use the nearest intersection such as Market St./ 10th St.</p>
                    </div>
                    <hr>

                    <form method="POST" action="/robbery_insert" novalidate class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="street_address_incident" class="col-sm-2 control-label">Street Address</label>
                            <div class="col-sm-10">
                                <input type="text" id="street_address_incident" class="form-control" name="street_address_incident" placeholder="Enter the street address where the incident occured">
                                <?php if($errors->has('street_address_incident')): ?> <p class="help-block"><?php echo e($errors->first('street_address_incident')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city_incident" class="col-sm-2 control-label">City</label>
                            <div class="col-sm-4">
                                <input type="text" id="city_incident" class="form-control" name="city_incident" placeholder="Enter the city name">
                                <?php if($errors->has('city_incident')): ?> <p class="help-block"><?php echo e($errors->first('city_incident')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="zip_code_incident" class="col-sm-2 control-label">Zip Code</label>
                            <div class="col-sm-4">
                                <input type="text" id="zip_code_incident" class="form-control" name="zip_code_incident" placeholder="Enter Zip Code">
                                <?php if($errors->has('zip_code_incident')): ?> <p class="help-block"><?php echo e($errors->first('zip_code_incident')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="incident_time_start" class="col-sm-2 control-label">Incident Time(Start)</label>
                            <div class="col-sm-4">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="incident_start">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <?php if($errors->has('incident_start')): ?> <p class="help-block"><?php echo e($errors->first('incident_start')); ?></p> <?php endif; ?>
                            </div>
                        </div>
                        <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>


                        <div class="form-group">
                            <label for="incident_time_end" class="col-sm-2 control-label">Incident Time(End)</label>
                            <div class="col-sm-4">
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" name="incident_end">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <?php if($errors->has('incident_end')): ?> <p class="help-block"><?php echo e($errors->first('incident_end')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker2').datetimepicker();
                            });
                        </script>


                        <div class="form-group">
                            <label for="witness" class="col-sm-2 control-label">Have Suspect or Witness Info to Enter?</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label><input type="radio" name="witness" value="Yes">Yes</label>
                                    <label><input type="radio" name="witness" value="No">No</label>
                                </div>
                            </div>
                            <?php if($errors->has('witness')): ?> <p class="help-block"><?php echo e($errors->first('witness')); ?></p> <?php endif; ?>
                        </div>
                    

                <?php /*robbery incident End*/ ?>
                <?php /*robbery property information start*/ ?>
                <hr>
                <h4 style="color: #00acc1;">Enter Property Information:-</h4>
                <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                        <p>Please enter the Property information.</p>
                    </div>
                    <hr>

                    <form method="POST" action="/robbery_insert" novalidate class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="type" class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-3">
                            <select name="type" class="form-control">
                                <option value="">Type</option>
                                <option value="">---------------</option>
                                <option value="ATM/Debit Card">ATM/Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Motor Bike">Motor Bike</option>
                                <option value="Car">Car</option>
                                <option value="ID Card">NID Card</option>
                                <option value="Cicle">Cicle</option>
                                <option value="Money">Money</option>
                                <option value="Mobile Phone">Mobile Phone</option>
                                <option value="Wallet">Wallet</option>
                            </select>
                            <?php if($errors->has('type')): ?> <p class="help-block"><?php echo e($errors->first('type')); ?></p> <?php endif; ?>
                        </div>
                            </div>

                        <div class="form-group">
                            <label for="brand" class="col-sm-2 control-label">Brand</label>
                            <div class="col-sm-6">
                                <input type="text" id="brand" class="form-control" name="brand" placeholder="Enter your property brand">
                                <?php if($errors->has('brand')): ?> <p class="help-block"><?php echo e($errors->first('brand')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="model" class="col-sm-2 control-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" id="model" class="form-control" name="model" placeholder="Enter your property model number">
                                <?php if($errors->has('model')): ?> <p class="help-block"><?php echo e($errors->first('model')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-3">
                                <select name="color" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="">---------------</option>
                                    <option value="black">Black</option>
                                    <option value="blue">Blue</option>
                                    <option value="bronze">Bronze</option>
                                    <option value="brown">Brown</option>
                                    <option value="camoflague">Camoflague</option>
                                    <option value="chrome">Chrome</option>
                                    <option value="copper">Copper</option>
                                    <option value="cream/ivory">Cream/Ivory</option>
                                    <option value="dark blue">Dark Blue</option>
                                    <option value="dark green">Dark Green</option>
                                    <option value="gold">Gold</option>
                                    <option value="gray">Gray</option>
                                    <option value="green">Green</option>
                                    <option value="white">White</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="light blue">Light Blue</option>
                                    <option value="light green">Light Green</option>
                                    <option value="silver">Silver</option>
                                </select>
                                <?php if($errors->has('color')): ?> <p class="help-block"><?php echo e($errors->first('color')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="serial_no" class="col-sm-2 control-label">Serial No</label>
                            <div class="col-sm-6">
                                <input type="text" id="serial_no" class="form-control" name="serial_no" placeholder="Enter your property serial number">
                                <?php if($errors->has('serial_no')): ?> <p class="help-block"><?php echo e($errors->first('serial_no')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="how_many" class="col-sm-2 control-label">How Many</label>
                            <div class="col-sm-6">
                                <input type="text" id="how_many" class="form-control" name="how_many">
                                <?php if($errors->has('how_many')): ?> <p class="help-block"><?php echo e($errors->first('how_many')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Property Description</label>
                            <div class="col-sm-6">
                                <textarea id="description" class="form-control" name="description" placeholder="Give your property description"></textarea>
                                <?php if($errors->has('description')): ?> <p class="help-block"><?php echo e($errors->first('description')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                <?php /*robbery property information end*/ ?>
                <?php /*robbery narative start*/ ?>
                <hr>
                <h4 style="color: #00acc1;"> Enter Narrative:-</h4>
                <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                        <p>Please enter a detailed description of the incident.<i style="color: red;"> Include in this description if you are NOT seeking criminal prosecution or if the intent of this report is solely for insurance purposes.</i>
                            <br>
                            (2000 characters max)
                        </p>
                    </div>
                    <hr>

                    <form method="POST" action="/robbery_insert" novalidate class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="narrative" class="col-sm-2 control-label">Narrative</label>
                            <div class="col-sm-10">
                                <textarea id="narrative" class="form-control" name="narrative" placeholder="2000 characters maximum"></textarea>
                                <?php if($errors->has('narrative')): ?> <p class="help-block"><?php echo e($errors->first('narrative')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                    
            <center><p style="color:red;">Please double check before submission<br>
                        Once you submitted you could not change</p></center>

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="random_number" id="random-number" value="" />
            <br>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;" onclick="getElementById('random-number').value=Math.floor(Math.random()*10000)"></center>

        </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>