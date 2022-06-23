(function ($) {
  $(document).ready(function (e) {
//quick message form validation 
    if ($('.home_request_form').length) {
      $('.home_request_form').parsley().on('field:validated', function (e) {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      }).on('form:submit', function (e) {
        return false; // Don't submit form for this demo
      });
    }

//contact form validation
    if ($('.home_contact_form').length) {
      $('.home_contact_form').parsley().on('field:validated', function (e) {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      }).on('form:submit', function (e) {

        return false; // Don't submit form for this demo
      });
    };

//vendor registration form validation;
    if ($('.vendor_register_form').length) {
      $('.vendor_register_form').parsley().on('field:validated', function (e) {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      }).on('form:submit', function (e) {

        return false; // Don't submit form for this demo
      });
    };

    //https://github.com/suyati/line-control editor
    //adding linecontroll editor to vendor register page
    if($(".company_description").length)
    {
      $(".company_description").val($.trim($(".company_description").val()));
      $(".company_description").Editor();
    }

    //login form validation;
    if ($('.login_form').length) {
      $('.login_form').parsley().on('field:validated', function (e) {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
      }).on('form:submit', function (e) {

        return false; // Don't submit form for this demo
      });
    };




  });
}(jQuery));