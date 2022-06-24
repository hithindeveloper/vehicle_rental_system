<?php $role = Request::segment(2); ?>
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
                    <h2 class="mb-3">Login Form</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <form enctype="multipart/form-data" class="login_form" method="post" action="<?php echo url('/login_process'); ?>">
                <input type="hidden" value="<?php echo csrf_token(); ?>" name="_token">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control phone_number" id="phone_number" placeholder="Enter your company name" name="company_name" data-parsley-required data-parsley-required-message="Please insert your company name" value="<?php echo Request::old('company_name'); ?>">
                    <?php
                    foreach ($errors->get('phone_number') as $key => $message) {
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
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control contact_person" id="password" placeholder="Enter a contact person" data-parsley-required data-parsley-required-message="Please enter your companies contact person" name="contact_person" value="<?php echo Request::old('contact_person'); ?>">

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
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
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