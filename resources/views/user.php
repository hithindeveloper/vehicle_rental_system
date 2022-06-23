<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'navigation.php'; ?>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo url('public'); ?>/images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo url('/') ?>">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Vendor Register <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Our Services</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-3">User Registration Form</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <form class="vendor_register_form" method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control user_name" id="user_name"
                        placeholder="Enter your name" name="user_name" data-parsley-required
                        data-parsley-required-message="Please insert your name">
                </div>
                <div class="form-group">
                    <label for="" class="label">Age</label>
                    <input type="text" data-parsley-required
                        data-parsley-required-message="Please Enter your age" name="age" pattern="/^(?:1[01][0-9]|99|1[8-9]|[2-9][0-9])$/gm"
                        data-parsley-pattern-message="please enter a valid age" class="form-control phone "
                        placeholder="Enter Your Age">
                </div>
                <div class="form-group">
                    <label for="" class="label">Phone</label>
                    <input type="text" data-parsley-required
                        data-parsley-required-message="Please insert your phone number" name="phone" pattern="[0-9]{10}"
                        data-parsley-pattern-message="please enter a valid phone number" class="form-control phone "
                        placeholder="Enter Your Phone number">
                </div>
                <div class="form-group">
                    <label for="" class="label">Email Id</label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        data-parsley-pattern-message="Please enter valid email formate" data-parsley-required
                        data-parsley-required-message="Please insert your email id" name="email_id"
                        class="form-control email_id " placeholder="Enter Email Address">
                </div>
                
                <div class="form-group">
                    <label for="" class="label">Gender</label><br/>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" value="male" class="form-check-input gender" name="gender"
                          data-parsley-required
                          data-parsley-required-message="Please Select a Gender"
                          data-parsley-errors-container="#gender_error_list" 
                          >Male
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio"  value="female" class="form-check-input gender" name="gender">Female
                        </label>
                      </div>
                      <div class="form-check-inline ">
                        <label class="form-check-label">
                          <input type="radio" value="transgender" class="form-check-input gender" name="gender">Transgender
                        </label>
                      </div>
                      <p id="gender_error_list"></p>
                </div>

                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Please Select a Id Proof</label>
                    <select class="form-control id_proof" id="id_proof" required=''
                        data-parsley-required-message="Please Select a id proof" name="id_proof">
                        <option value="">Please Select a Option</option>
                        <option value="adhar_card">Adhar Card</option>
                        <option value="driving_licence">Driving Licence</option>
                        <option value="voter_id">Voter Id</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Id Proof id</label>
                    <input type="text" class="form-control company_name" id="id_proof_number"
                        placeholder="Enter your id proof number" name="id_proof_number" data-parsley-required
                        data-parsley-required-message="Please insert your id proof number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Your id proof</label>
                    <input type="file" name="id_proof_upload" accept=".jpg,.png,.pdf"
                        class="form-control id_proof_upload" id="id_proof_upload" data-parsley-required
                        data-parsley-required-message="Please select a id proof to upload">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control password" id="password" placeholder="Enter a  password"
                        data-parsley-required data-parsley-required-message="Please enter your password"
                        name="password">
                </div>
                <div class="form-group">
                    <label for="password">Retype Password</label>
                    <input type="password" class="form-control rpassword" id="rpassword"
                        placeholder="Enter your password again" data-parsley-required
                        data-parsley-required-message="Please enter your password again"
                        data-parsley-equalto="#password" data-parsley-equalto-message="Please type the same password"
                        name="rpassword">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                            href="https://hhiitthhiinn.blogspot.com" target="_blank">Hithin chandran</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
    <?php include 'footer_script.php'; ?>
</body>
</html>