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

    $("#contactus_form").validate({
        rules: {
            'name': {
                required: true
            },
            'contact':{
                required: true,
                minlength: 11
            },
            'email': {
                required: true,
                email: true
            },
            'confirm_email': {
                required: true,
                email: true
            },
            'subject':{
                required: true,
            },
            'message': {
                required: true,
            },
            'captcha': {
                required: true
            }
        },
        messages: {
            name: "Please input your name here!",
            confirm_email: "Please double check your email!",
            captcha: "Invalid captcha!"
        }
    });
});