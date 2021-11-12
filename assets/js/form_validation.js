$(document).ready(function(){
    $("#warranty_form").validate({
        rules: {
            'name':{
                required: true,
                minlength: 2
            },
            'email': {
                required: true,
                email: true
            },
            'confirm_email': {
                required: true,
                email: true
            },
            'mobile_num': {
                required: true,
                minlength: 11
            },
            'item': {
                required: true
            },
            'purchase_form': {
                required: true
            },
            'purchase_price': {
                required: true
            },
            'purchase_date': {
                required: true
            },
            'order_number': {
                required: true
            },
            'serial_num': {
                required: true
            },
            'captcha': {
                required: true
            }
        }
    });

    $(document).ready(function(){
        $('#contactus_send').on('click', function(){
            var error_name = '';
            var error_contactnum = '';
            var error_email = '';
            var error_confirmEmail = '';
            var error_subject = '';
            var error_message = '';
            var error_captcha = '';

            var error_emailValidation = '';
            var error_captchaValidation = '';
    
            if($('#name').val() == ''){
                error_name = '<b>This field is required! </b>';
                $('#error_name').html(error_name);
            } else {
                error_name = '';
                $('#error_name').html(error_name);
            }

            if($('#contact_num').val() == ''){
                error_contactnum =  '<b>This field is required! </b>';
                $('#error_contact').html(error_contactnum);
            } else {
                error_contactnum =  '';
                $('#error_contact').html(error_contactnum);
            }

            if($('#email').val() == ''){
                error_email = '<b>This field is required! </b>';
                $('#error_email').html(error_email);
            } else {
                error_email = '';
                $('#error_email').html(error_email);
            }

            if($('#confirm_email').val() == ''){
                error_confirmEmail = '<b>This field is required! </b>';
                $('#error_confirmEmail').html(error_confirmEmail);
            } else {
                error_confirmEmail = '';
                $('#error_confirmEmail').html(error_confirmEmail);
            }

            if($('#email').val() != $('#confirm_email').val()){
                error_emailValidation = '<b>Your Email is not match. Please try again!</b>';
                $('#error_emailValidation').html(error_emailValidation);
            } else {
                error_emailValidation = '';
                $('#error_emailValidation').html(error_emailValidation);
            }

            if($('#subject').val() == '') {
                error_subject = '<b>This field is required! </b>';
                $('#error_subject').html(error_subject);
            } else {
                error_subject = '';
                $('#error_subject').html(error_subject);
            }

            if($('#message').val() == '') {
                error_message = '<b>This field is required!</b>';
                $('#error_message').html(error_message);
            } else {
                error_message = '';
                $('#error_message').html(error_message);
            }

            if($('#captcha_validate').val() != $('#captcha').val()){
                error_captchaValidation = '<b>Invalid Captcha. Please try again!</b>';
                $('#error_captchaValidation').html(error_captchaValidation);
            } else {
                error_captchaValidation = '';
                $('#error_captchaValidation').html(error_captchaValidation);
            }

            if(error_name != '' || error_contactnum != '' || error_contactnum != '' || error_email != '' || error_subject != '' || error_message != '' || error_captchaValidation != '') {
                return false;
            } else {
                var customer_name = $('#name').val();
                var customer_contact_num = $('#contact_num').val();
                var customer_email = $('#email').val();
                var customer_subject = $('#subject').val();
                var customer_message = $('#message').val();
                $('#contactus_send').attr('disabled', 'disabled');
                $.ajax({
                        url: 'controller/contact.php',
                        method:'POST',
                        data:{
                            customer_name:customer_name,
                            customer_contact_num:customer_contact_num,
                            customer_email:customer_email,
                            customer_subject:customer_subject,
                            customer_message:customer_message
                        },  
                        success: function(response){
                            if (response == 'Successfully sent!'){
                                // $('#sendingValidation').addClass('alert alert-success'); 
                                // $('#sendingValidation').html(response); 
                                window.location.reload(true);
                            } else {
                                $('#sendingValidation').addClass('alert alert-danger');
                                $('#sendingValidation').html(response);
                                // window.location.reload(true);
                            }
                        }
                });
            }
        });
    });
});