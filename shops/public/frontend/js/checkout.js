$(document).ready(function(){
     $('.razorpay_btn').click(function(e){
             e.preventDefault();

            var firstname    = $('.firstname').val();
            var lastaname    = $('.lastaname').val();
            var email        = $('.email').val();
            var phonenumber  = $('.phonenumber').val();
            var address1     = $('.address1').val();
            var address2     = $('.address2').val();
            var city         = $('.city').val();
            var state        = $('.state').val();
            var country      = $('.country').val();
            var pincode      = $('.pincode').val();

            if(!firstname){
                var fnameError ="The firstname is required";
                $('#fnameError').html('');
                $('#fnameError').html(fnameError);
            }
            else{
                $('#fnameError').html('');
            }
            if(!lastaname){
                var lnameError ="The lastaname is required";
                $('#lnameError').html('');
                $('#lnameError').html(lnameError);
            }
            else{
                lnameError="";
                $('#lnameError').html('');
            }
            if(!email){
                var emailError ="The email is required";
                $('#emailError').html('');
                $('#emailError').html(emailError);
            }
            else{
                emailError = "";
                $('#emailError').html('');
            }
            if(!phonenumber){
                var phoneError ="The phonenumber is required";
                $('#phoneError').html('');
                $('#phoneError').html(phoneError);
            }
            else{
                phoneError= "";
                $('#phoneError').html('');
            }
            if(!address1){
                var addres1Error ="The address1 is required";
                $('#addres1Error').html('');
                $('#addres1Error').html(addres1Error);
            }
            else{
                addres1Error= "";
                $('#addres1Error').html('');
            }
            if(!address2){
                var address2Error ="The firstname is required";
                $('#address2Error').html('');
                $('#address2Error').html(address2Error);
            }
            else{
                address2Error="";
                $('#address2Error').html('');
            }
            if(!city){
                var cityError ="The city is required";
                $('#cityError').html('');
                $('#cityError').html(cityError);
            }
            else{
                cityError = "";
                $('#cityError').html('');
            }
            if(!state){
                var stateError ="The state is required";
                $('#stateError').html('');
                $('#stateError').html(stateError);
            }
            else{
                stateError = "";
                $('#stateError').html('');
            }
            if(!country){
                var countryError ="The country is required";
                $('#countryError').html('');
                $('#countryError').html(countryError);
            }
            else{
                countryError = "";
                $('#countryError').html('');
            }
            if(!pincode){
                var pincodeError ="The pin code is required";
                $('#pincodeError').html('');
                $('#pincodeError').html(pincodeError);
            }
            else{
                pincodeError = "";
                $('#pincodeError').html('');
            }

            if(fnameError !='' && lnameError !=''&& emailError != '' &&  addres1Error != '' && address2Error != '' && cityError != '' && stateError!='' && countryError !='' &&pincodeError != ''){
                 return false;
            }
            else{
              var data = {
                    'firstname' : firstname, 
                    'lastaname' : lastaname, 
                    'email'      : email,
                    'phonenumber': phonenumber,
                    'address1' : address1,  
                    'address2' : address2,  
                    'city'  : city,     
                    'state'   : state,   
                    'country' : country,   
                    'pincode' : pincode      
                }
                $.ajax({
                    method:"POST",
                    url:"/proceed-to-pay",
                    data:data,
                    success: function (response){
                       // alert(response.total_price);
                       var option = {

                        "key":"copied from the razor pay",
                        "ammount":response.total_price,
                        "currency":"Tsh",
                        "name":response.firstname+' '+response.lastname,
                        "description":"Thank you for choosing our service",
                        "image":"https://example.com/my_logo",
                        "handler": function (responsea){
                            //alert(responsea.razorpay_payment_id);
                            $.ajax({
                                method:"POST",
                                url:"/place-order",
                                data:{
                                    'firstname':response.firstname,
                                    'lastaname':response.lastaname,
                                    'email':response.email,
                                    'phonenumber':response.phonenumber,
                                    'address1':response.address1,
                                    'address2':response.address2,
                                    'city':response.city,
                                    'state':response.state,
                                    'country':response.country,
                                    'pincode':response.pincode,
                                    'payment_mode':"paid by razorpay",
                                    'payment_id':responsea.razorpay_payment_id
                                },
                                success: function(responseb){
                                 //alert(responseb.status);
                                 swal(responseb.status);
                                 window.location.href="/my-orders";
                                }
                            });
                        }
                       }
                    }
                });
            }
      
     });
});