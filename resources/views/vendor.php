<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'navigation.php' ?>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo url('public') ?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Vendor Register <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Our Services</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-3">Vendor Registration Form</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <form enctype="multipart/form-data" class="vendor_register_form" method="post" action="<?php echo url('/insert_vendo'); ?>">
            <input type="hidden" value="<?php echo url('/usercheck'); ?>" name="url" id="url" class="url">    
            <input type="hidden" value="<?php echo csrf_token(); ?>" name="_token">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control company_name" id="company_name" placeholder="Enter your company name" name="company_name" data-parsley-required data-parsley-required-message="Please insert your company name" value="<?php echo Request::old('company_name'); ?>">
                    <?php
                    foreach ($errors->get('company_name') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact Person</label>
                    <input type="text" class="form-control contact_person" id="contact_person" placeholder="Enter a contact person" data-parsley-required data-parsley-required-message="Please enter your companies contact person" name="contact_person" value="<?php echo Request::old('contact_person'); ?>">

                    <?php
                    foreach ($errors->get('contact_person') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <!-- -->
                    <label for="" class="label">Phone</label>
                    <input type="text" data-parsley-required 
                    id="phone"
                    data-parsley-required-message="Please insert your phone number" 
                    name="phone" data-parsley-pattern-message="please enter a valid phone number"
                     class="form-control phone " placeholder="Enter Your Phone number" 
                     pattern="[0-9]{10}" value="<?php echo Request::old('phone'); ?>">
                    <p class="message"></p>
                    <?php
                    foreach ($errors->get('phone') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <p class="phone_status"></p>
                </div>
                <div class="form-group">
                    <label for="" class="label">Email Id</label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" data-parsley-pattern-message="Please enter valid email formate" data-parsley-required data-parsley-required-message="Please insert your email id" name="email_id" class="form-control email_id " placeholder="Enter Email Address" value="<?php echo Request::old('email_id'); ?>">
                    <?php
                    foreach ($errors->get('email_id') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="company_description">Company Description</label>
                    <textarea name="company_description" class="form-control company_description" 
                    id="company_description" rows="3" 
                   >
                    <?php echo Request::old('company_description'); ?>
                </textarea>
                    <?php
                    foreach ($errors->get('company_description') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <p class="description_error_list"></p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Please Select a Id Proof</label>
                    <select class="form-control id_proof" id="id_proof" required='' data-parsley-required-message="Please Select a id proof" name="id_proof">
                        <option value="">Please Select a Option</option>
                        <option value="adhar_card">Adhar Card</option>
                        <option value="driving_licence">Driving Licence</option>
                        <option value="voter_id">Voter Id</option>
                        <option value="passport">Passport</option>
                    </select>
                    <?php
                    foreach ($errors->get('id_proof') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Id Proof id</label>
                    <input type="text" class="form-control company_name" id="id_proof_number" placeholder="Enter your id proof number" name="id_proof_number" data-parsley-required data-parsley-required-message="Please insert your id proof number" value="<?php echo Request::old('id_proof_number'); ?>">
                    <?php
                    foreach ($errors->get('id_proof_number') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Your id proof(pdf document only)</label>
                    <input type="file" name="id_proof_upload" accept=".pdf" class="form-control id_proof_upload" id="id_proof_upload" data-parsley-required data-parsley-required-message="Please select a id proof to upload">
                    <?php
                    foreach ($errors->get('id_proof_number') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control password" id="password" placeholder="Enter a  password" data-parsley-required data-parsley-required-message="Please enter your password" name="password">
                    <?php
                    foreach ($errors->get('password') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Retype Password</label>
                    <input type="password" class="form-control rpassword" id="rpassword" placeholder="Enter your password again" data-parsley-required data-parsley-required-message="Please enter your password again" data-parsley-equalto="#password" data-parsley-equalto-message="Please type the same password" name="rpassword">
                    <?php
                    foreach ($errors->get('rpassword') as $key => $message) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message;
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo url('/login/vendor'); ?>" class="btn btn-primary">Sign Up</a>
                
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php include 'footer.php'; ?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <?php include 'footer_script.php'; ?>
</body>

</html>