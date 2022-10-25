// // Scroll Indicator
// window.onscroll = function () {
//   myFunction();
// };

// // Trigger reading progress
// function myFunction() {
//   let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
//   let height =
//     document.documentElement.scrollHeight -
//     document.documentElement.clientHeight;
//   let scrolled = (winScroll / height) * 100;
//   document.getElementById("myBar").style.width = scrolled + "%";
// }

// Trigger Spinning Gear icon to reveal password input
function passTransparency() {
  let passField = document.getElementById("ff_14_password");
  let iconSelected = document.getElementById("iconSelect");
  if (passField.type === "password") {
    passField.type = "text";
    iconSelected.classList.add("active");
  } else {
    passField.type = "password";
    iconSelected.classList.remove("active");
  }
}

jQuery(document).ready(function () {
  jQuery(".slick-main").slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true
        }
      },
      {
        breakpoint: 968,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});

jQuery(document).ready(function () {
  jQuery(".slick-secondary").slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});

function validateEmail() {
  let emailField = document.getElementById("ff_19_email");
  let emailFieldValue = emailField.value;
  const acceptedEmail = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

  let fieldParent = document.querySelector(".email-stax .ff-el-input--content");

  if (emailFieldValue.match(acceptedEmail)) {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

function validatePassword() {
  let passwordField = document.getElementById("ff_19_password");
  let passwordFieldValue = passwordField.value;
  const acceptedPassword = new RegExp(
    /(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,30}/g
  );
  let fieldParent = document.querySelector(".password-stax .ff-el-input--content");

  if (passwordFieldValue.match(acceptedPassword)) {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

function validateUsername() {
  let usernameField = document.getElementById("ff_19_nickname");
  let usernameFieldValue = usernameField.value;
  const acceptedUsername = new RegExp(/^[A-Za-z]{1,16}$/g);
  let fieldParent = document.querySelector(".username--stax .ff-el-input--content");

  if (usernameFieldValue.match(acceptedUsername)) {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

function validateFirstName() {
  let firstNameField = document.getElementById("ff_19_first_name");
  let firstNameFieldValue = firstNameField.value;
  const acceptedFirstName = new RegExp(
    /^(?=[a-zA-Z\s]{2,25}$)(?=[a-zA-Z\s])(?:([\w\s*?])\1?(?!\1))+$/g
  );
  let fieldParent = document.querySelector(".first--name-stax .ff-el-input--content");

  if (firstNameFieldValue.match(acceptedFirstName)) {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

function validateLastName() {
  let lastNameField = document.getElementById("ff_19_last_name");
  let lastNameFieldValue = lastNameField.value;
  const acceptedLastName = new RegExp(
    /^(?=[a-zA-Z\s]{2,25}$)(?=[a-zA-Z\s])(?:([\w\s*?])\1?(?!\1))+$/g
  );
  let fieldParent = document.querySelector(".last--name-stax .ff-el-input--content");

  if (lastNameFieldValue.match(acceptedLastName)) {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

function validateCountryPicker() {
  let countryField = document.querySelector(".choices__input");
  let countryFieldValue = countryField.value;
  let fieldParent = document.querySelector(".country--picker-stax  .ff-el-input--content");

  if (countryFieldValue !== "") {
    fieldParent.classList.add("validation--valid");
    fieldParent.classList.remove("validation--invalid");
  } else {
    fieldParent.classList.remove("validation--valid");
    fieldParent.classList.add("validation--invalid");
  }
}

(function lookForField() {
  let submitField = document.querySelector(".ff-btn-submit");
  submitField.addEventListener("click", function () {
    validateEmail();
    validatePassword();
    validateUsername();
    validateFirstName();
    validateLastName();
    validateCountryPicker();
  });
})();
