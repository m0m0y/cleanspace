function isEmail(email, confirmEmail) {
    var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (filter.test(email, confirmEmail)) {
        return true;
    }
    else {
        return false;
    }
}

$(document).ready(function(){
    $('#other_input').hide();
    
    $('.others').click(function(){
        var others = $(this).attr('class');
        var target = $('.' + others);
        $('#other_input').not(target).show();
        $(target).hide();
    });

    $('#warranty_send').on('click', function(){
        var c_name = '';
        var c_email = '';
        var c_confirm_email = '';
        var c_address = '';
        var c_mobile_num = '';
        var c_message = '';
        var c_item = '';
        var c_purchase_form = '';
        var c_purchase_price = '';
        var c_order_number = '';
        var c_distributor = '';
        var c_purchase_date = '';
        var c_serial_num = '';
        var c_factors = '';
        var c_captcha = '';

        var distributor = $('#distributor option:selected').val();
        var factors = $('#factors option:selected').val();

        var email = $('#email').val();
        var confirmEmail = $('#confirm_email').val();


        if($('#name').val() == ''){
            c_name = '<b>This field is required!</b>';
            $('#c_name').html(c_name);
        } 

        if ($.trim(email).length == null || $.trim(confirmEmail).length == null) {
            c_email = '<b>This field is required!</b>';
            $('#c_email').html(c_email);

            c_confirm_email = '<b>This field is required!</b>';
                $('#c_confirm_email').html(c_confirm_email);
        }
        if (isEmail(email, confirmEmail)) {
            c_email = '';
            $('#c_email').html(c_email);

            c_confirm_email = '';
                $('#c_confirm_email').html(c_confirm_email);
        }
        else {
            c_email = '<b>Invalid Email Address!</b>';
            $('#c_email').html(c_email);

            c_confirm_email = '<b>Invalid Email Address!</b>';
                $('#c_confirm_email').html(c_confirm_email);
        }

        if($('#email').val() != $('#confirm_email').val()){
            c_confirm_email = '<b>Please double check your email!</b>';
            $('#c_confirm_email').html(c_confirm_email);
        }

        if($('#complete_add').val() == ''){
            c_address = '<b>This field is required!</b>';
            $('#c_address').html(c_address);
        } 

        if($('#mobile_num').val() == ''){
            c_mobile_num = '<b>This field is required!</b>';
            $('#c_mobile_num').html(c_mobile_num);
        } 

        if($('#product_item').val() == ''){
            c_item = '<b>This field is required!</b>';
            $('#c_item').html(c_item);
        } 

        if($('#purchase_form').val() == ''){
            c_purchase_form = '<b>This field is required!</b>';
            $('#c_purchase_form').html(c_purchase_form);
        } 

        if($('#purchase_price').val() == ''){
            c_purchase_price = '<b>This field is required!</b>';
            $('#c_purchase_price').html(c_purchase_price);
        } 

        if($('#order_num').val() == ''){
            c_order_number = '<b>This field is required!</b>';
            $('#c_order_number').html(c_order_number);
        } 

        if(distributor == ''){
            c_distributor = '<b>Please select one!</b>';
            $('#c_distributor').html(c_distributor);
        } 
        else {
            c_distributor = '';
            $('#c_distributor').html(c_distributor);
        }

        if($('#purchase_date').val()== ''){
            c_purchase_date = '<b>This field is required!</b>';
            $('#c_purchase_date').html(c_purchase_date);
        } 
        else {
            c_purchase_date = '';
            $('#c_purchase_date').html(c_purchase_date);
        }

        if($('#serial_num').val() == ''){
            c_serial_num = '<b>This field is required!</b>';
            $('#c_serial_num').html(c_serial_num);
        } 
    
        if(factors == ''){
            c_factors = '<b>This field is required!</b>';
            $('#c_factors').html(c_factors);
        } 
        else {
            c_factors = '';
            $('#c_factors').html(c_factors);
        }

        if($('#captcha_validate').val() != $('#captcha').val()){
            c_captcha = '<b>Invalid Captcha. Please try again!</b>';
            $('#c_captcha').html(c_captcha);
        }

        if($('#message').val() == '') {
            c_message = '<b>This field is required!</b>';
            $('#c_message').html(c_message);
        }

        if(c_name != '' || c_email != '' || c_confirm_email != '' || c_address != '' || c_mobile_num != '' || c_message != '' || c_item != '' || c_purchase_form != '' || c_purchase_price != '' || c_order_number != '' || c_distributor != '' || c_purchase_date != '' || c_serial_num != '' || c_factors != '' || c_captcha != ''){
            return false;
        } else {
            var customer_name = $('#name').val();
            var customer_email = $('#email').val();
            var customer_address = $('#complete_add').val();
            var customer_mobile_num = $('#mobile_num').val();
            var customer_phone_num = $('#phone_num').val();
            var customer_product_item = $('#product_item').val();
            var customer_purchase_form = $('#purchase_form').val();
            var customer_purchase_price = $('#purchase_price').val();
            var customer_order_num = $('#order_num').val();
            var customer_distributor = $('#distributor').val();
            var customer_purchase_date = $('#purchase_date').val();
            var customer_serial_num = $('#serial_num').val();

            var aware = $('.rad:checked').val();
            var customer_factors = $('#factors').val();
            var packaging_rate = $('#packaging:checked').val();
            var product_rate = $('.star-rating:checked').val();
            var customer_message = $('#message').val();

            var captcha = $('#captcha').val();

            $.ajax({
                url: 'controller/warrant.php',
                method: 'POST',
                data:{
                    customer_name:customer_name,
                    customer_email:customer_email,
                    customer_address:customer_address,
                    customer_mobile_num:customer_mobile_num,
                    customer_phone_num:customer_phone_num,
                    customer_product_item:customer_product_item,
                    customer_purchase_form:customer_purchase_form,
                    customer_purchase_price:customer_purchase_price,
                    customer_order_num:customer_order_num,
                    customer_distributor:customer_distributor,
                    customer_purchase_date:customer_purchase_date,
                    customer_serial_num:customer_serial_num,
                    aware:aware,
                    customer_factors:customer_factors,
                    packaging_rate:packaging_rate,
                    product_rate:product_rate,
                    customer_message:customer_message
                },
                success: function(response){
                    if(response == "Successfully sent!"){
                        window.location.reload(true);
                    } else {
                        $('#sendingValidation').addClass('alert alert-danger');
                        $('#sendingValidation').html(response);
                    }
                }
            });
        }
    });
});

function txtvalidator(el){
    var input_id = $(el).attr('name');
    var input_val = $('input[name='+input_id+']').val();
    var textarea_val = $('textarea[name='+input_id+']').val();

    if(input_val =="" || input_val==null && textarea_val == ""){
        $('#'+input_id).html("<b>This field is required! </b>");
    }
    else{
        $('#'+input_id).html("");
    }
}

$(document).ready(function(){
    $('#contactus_send').on('click', function(){
        var c_name = '';
        var c_contact = '';
        var c_email = '';
        var c_confirm_email = '';
        var c_subject = '';
        var c_message = '';
        var c_captcha = '';

        if($('#name').val() == ''){
            c_name = '<b>This field is required! </b>';
            $('#c_name').html(c_name);
        } 

        if($('#contact_num').val() == ''){
            c_contact =  '<b>This field is required! </b>';
            $('#c_contact').html(c_contact);
        }

        if($('#email').val() == ''){
            c_email = '<b>This field is required! </b>';
            $('#c_email').html(c_email);
        }

        if($('#confirm_email').val() == ''){
            c_confirm_email = '<b>This field is required! </b>';
            $('#c_confirm_email').html(c_confirm_email);
        }

        if($('#email').val() != $('#confirm_email').val()){
            c_confirm_email = '<b>Please double check your email!</b>';
            $('#c_confirm_email').html(c_confirm_email);
        }

        if($('#subject').val() == '') {
            c_subject = '<b>This field is required! </b>';
            $('#c_subject').html(c_subject);
        }

        if($('#message').val() == '') {
            c_message = '<b>This field is required!</b>';
            $('#c_message').html(c_message);
        }

        if($('#captcha_validate').val() != $('#captcha').val()){
            c_captcha = '<b>Invalid Captcha. Please try again!</b>';
            $('#c_captcha').html(c_captcha);
        }

        if(c_name != '' || c_contact != '' || c_email != '' || c_confirm_email != '' || c_subject != '' || c_message != '' || c_captcha != '') {
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
                    }
                }
            });
        }
    });
});
