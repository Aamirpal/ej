$(document).ready(function () {
	$(".add_menu_form").validate({
		rules: {
	        "product_name": {
	            required: true,
	            maxlength:30
	        },
	        "price": {
	            required: true,
	            maxlength:7
	        }
	    }  
	});


	$(".edit_bar_info").validate({
		rules: {
	        "restaurant_name": {
	            required: true,
	            maxlength:10
	        },
	        "description": {
	            required: true,
	            maxlength:100
	        },
	        "address": {
	            required: true,
	            maxlength:100
	        },
	        "opening_hours": {
	            required: true,
	            maxlength:100
	        }
	    }  
	});


	$(".register_bar_user").validate({
		rules: {
	        "email": {
	            required: true,
	            email:true
	        },
	        'password':{
	        	required:true
	        },
	        'password_confirmation':{
	        	required:true,
	        	equalTo : "#password"
	        },
	        'bar_name':{
	        	required:true
	        }
	    }  
	});


});