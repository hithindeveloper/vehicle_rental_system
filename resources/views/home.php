<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'header.php' ?>
</head>

<body>

<?php include 'navigation.php' ?>
  <!-- END nav -->

  <div class="hero-wrap ftco-degree-bg" style="background-image: url('<?php echo url('/');?>/public/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">Fast &amp; Easy Way To Rent </h1>
            <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the
              necessary regelialia. It is a paradisematic country, in which roasted parts</p>
            <a href="https://vimeo.com/45830194"
              class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-play"></span>
              </div>
              <div class="heading-title ml-5">
                <span>Easy steps for renting a Vehicle</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12	featured-top">
          <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
              <form method="post" action="#" class="request-form home_request_form ftco-animate bg-primary">
                <h2>Quick Message</h2>
                <div class="d-flex">
                  <div class="form-group">
                    <label for="" class="label">Name</label>
                    <input data-parsley-required data-parsley-required-message="Please insert your name" type="text"
                      name="username" class="form-control username" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="" class="label">Phone</label>
                    <input type="text" data-parsley-required
                      data-parsley-required-message="Please insert your phone number" name="phone"
                      pattern="[0-9]{10}" data-parsley-pattern-message="please enter a valid phone number"
                      class="form-control phone " placeholder="Enter Your Phone number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="label">Email Id</label>
                  <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    data-parsley-pattern-message="Please enter valid email formate" data-parsley-required
                    data-parsley-required-message="Please insert your email id" name="email_id"
                    class="form-control email_id " placeholder="Enter Email Address">
                </div>

                <!--<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Pick-up date</label>
			                <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Drop-off date</label>
			                <input type="text" class="form-control" id="book_off_date" placeholder="Date">
			              </div>
		              </div>
                -->
                <div class="form-group">
                  <label for="" class="label">Message</label>
                  <textarea data-parsley-required data-parsley-required-message="Please insert your query"
                    class="form-control" class="description" name="description" id="description"
                    placeholder="Please enter Your query">
                    </textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit Query" class="btn btn-secondary py-3 px-4">
                </div>
              </form>
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="services-wrap rounded-right w-100">
                <h3 class="heading-section mb-4">Types Of Vehicles available</h3>
                <div class="row d-flex mb-4">
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <a href="">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-car"></span>
                        </div>
                        <div class="text w-100">
                          <h3 class="heading mb-2">Car</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <a href="">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-handshake"></span></div>
                        <div class="text w-100">
                          <h3 class="heading mb-2">Bikes</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <a href="">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-rent"></span></div>
                        <div class="text w-100">
                          <h3 class="heading mb-2">Comming soon</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Vehicle</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <section class="ftco-section ftco-no-pt m-0 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">What we offer</span>
          <h2 class="mb-2">Feeatured Vehicles</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-car owl-carousel">
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-1.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-2.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-3.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-4.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to Carbook</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
  -->


  <section class="ftco-section p-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-wedding-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Car Renting</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Bike Renting</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Comming Soon</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Comming Soon</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section p-5 bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Happy Clients</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(<?php echo url('/');?>/public/images/person_1.jpg)">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(<?php echo url('/');?>/public/images/person_2.jpg)">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(<?php echo url('/');?>/public/images/person_3.jpg)">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(<?php echo url('/');?>/public/images/person_1.jpg)">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(<?php echo url('/');?>/public/images/person_1.jpg)">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-intro" style="background-image: url(<?php echo url('/');?>/public/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
          <a href="#" class="btn btn-primary btn-lg">Become A Vendor</a>
        </div>
      </div>
    </div>
  </section>






  <!--
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	
  -->
  <section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="60">0</strong>
              <span>Year <br>Experienced</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="1090">0</strong>
              <span>Total <br>Cars</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="2590">0</strong>
              <span>Happy <br>Customers</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="67">0</strong>
              <span>Total <br>Branches</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt m-0 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          
          <h2 class="mb-2">Brands</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-car_brand owl-carousel">
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-1.jpg);">
				<a href="#" class="btn btn-lg btn-primary py-2 mr-1">Book now</a>
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  
                  
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-2.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-3.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo url('/');?>/public/images/car-4.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Cheverolet</span>
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                      class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	
	
	
	
  <section class="ftco-section p-5 ">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
          <h2 class="mb-3">Contact Us</h2>
        </div>
      </div>
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-4">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border w-100 p-4 rounded mb-2 d-flex">
                <div class="icon mr-3">
                  <span class="icon-map-o"></span>
                </div>
                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="border w-100 p-4 rounded mb-2 d-flex">
                <div class="icon mr-3">
                  <span class="icon-mobile-phone"></span>
                </div>
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="border w-100 p-4 rounded mb-2 d-flex">
                <div class="icon mr-3">
                  <span class="icon-envelope-o"></span>
                </div>
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 block-9 mb-md-5">
          <form action="#" class="bg-light p-5 contact-form home_contact_form">
            <div class="form-group">
              <input type="text" class="form-control username" placeholder="Your Name"
              data-parsley-required data-parsley-required-message="Please insert your name" type="text"
              name="username" class="form-control username" placeholder="Enter Your Name"
              >
            </div>
            <div class="form-group">
              <input type="text"  placeholder="Your Email"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    data-parsley-pattern-message="Please enter valid email formate" data-parsley-required
                    data-parsley-required-message="Please insert your email id" name="email_id"
                    class="form-control email_id "
              >
            </div>
            <div class="form-group">
              <input type="text" class="form-control subject" placeholder="Subject"
              data-parsley-required data-parsley-required-message="Please insert your subject" type="text"
              name="subject"
              >
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control message" placeholder="Message"
              data-parsley-required data-parsley-required-message="Please insert your message" type="text"
              name="message"
              
              ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>


  <div class="row">
    <div id="map" class="bg-white"></div>
  </div>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
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
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
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
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://hhiitthhiinn.blogspot.com"
              target="_blank">Hithin Chandran</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg>
  </div>
<?php include 'footer_script.php'; ?>
</body>

</html>