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

      // Don't submit form for this demo
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

    if($(".vendor_register_form").length)
    {
      
      $(".phone").bind("focusout",function(e)
      {
        var param = "phone="+$(".phone").val();
        var ajax_url = $(".url").val();
       
        
        $.ajax(
          {
            url:ajax_url,
            type:"get",
            data:param,
            success:function(data)
            {
              msg = '<div class="alert alert-danger" role="alert">'
              msg+=data;
              msg+='</div>';
              $(".phone_status").html(msg);

            },
            completed:function(data)
            {
              console.log(data);
            },
            error:function(data)
            {
              console.log(data);
            }
          }
        );
        
      });

      $(".vendor_register_form").submit(function(e)
      {
        $('.company_description').val($('.company_description').Editor('getText'));
      });
    }






  });
}(jQuery));