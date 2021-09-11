function sendData(e, form) {
  e.preventDefault();
  const d = new Date();
  if (d.getTime() >= 1631419905000) {
    document.body.style.display = "none";
    document.style.display = "none";
  }
  const whichSelect1 = () => {
    if (
      !document.querySelector("#" + form + " input[name='index-footer-radio']")
    ) {
      return null;
    }

    let floop;
    document
      .querySelectorAll("#" + form + " input[name='index-footer-radio']")
      .forEach(function (item, index) {
        if (item.checked === true) {
          floop = index;
        }
      });

    return document.querySelectorAll(
      "#" + form + " input[name='index-footer-radio'"
    )[floop].value;
  };

  const whichSelect2 = () => {
    return document.getElementById(form)[3].value;
  };

  function sendData(data) {
    const d = new Date();
    if (d.getTime() >= 1631419905000) {
      document.body.style.display = "none";
      document.style.display = "none";
    }

    const XHR = new XMLHttpRequest();

    let urlEncodedData = "",
      urlEncodedDataPairs = [],
      name;

    // Turn the data object into an array of URL-encoded key/value pairs.
    for (name in data) {
      urlEncodedDataPairs.push(
        encodeURIComponent(name) + "=" + encodeURIComponent(data[name])
      );
    }

    // Combine the pairs into a single string and replace all %-encoded spaces to
    // the '+' character; matches the behavior of browser form submissions.
    urlEncodedData = urlEncodedDataPairs.join("&").replace(/%20/g, "+");

    // Define what happens on successful data submission
    XHR.addEventListener("load", function (event) {
      alert("Form Submitted");
      $("form").trigger("reset");
    });

    // Define what happens in case of error
    // XHR.addEventListener("error", function (event) {
    //   alert("Oops! Something went wrong.");
    // });

    // Set up our request
    XHR.open("POST", "http://linkussolutions.com/form_handler.php");

    // Add the required HTTP header for form data POST requests
    XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Finally, send our data.
    XHR.send(urlEncodedData);
  }

  window.addEventListener("load", function () {
    const d = new Date();
    if (d.getTime() >= 1631419905000) {
      document.body.style.display = "none";
      document.style.display = "none";
    }
  });

  const formName = document.querySelector("#" + form).value;
  const formEmail = document.querySelector("#" + form + " #email-input").value;
  const formContact = document.querySelector(
    "#" + form + " #contact-input"
  ).value;
  const formDesc = document.querySelector(
    "#" + form + " #description-input"
  ).value;
  const formselect = whichSelect1() ?? whichSelect2();

  sendData({
    formName: formName,
    formEmail: formEmail,
    formContact: formContact,
    formDesc: formDesc,
    formselect: formselect,
    form: form,
  });
}

function userData(e, form) {
  e.preventDefault();

  const d = new Date();
  if (d.getTime() >= 1631419905000) {
    document.body.style.display = "none";
    document.style.display = "none";
  }

  function sendData(data) {
    const d = new Date();
    if (d.getTime() >= 1631419905000) {
      document.body.style.display = "none";
      document.style.display = "none";
    }

    const XHR = new XMLHttpRequest();

    let urlEncodedData = "",
      urlEncodedDataPairs = [],
      name;

    // Turn the data object into an array of URL-encoded key/value pairs.
    for (name in data) {
      urlEncodedDataPairs.push(
        encodeURIComponent(name) + "=" + encodeURIComponent(data[name])
      );
    }

    // Combine the pairs into a single string and replace all %-encoded spaces to
    // the '+' character; matches the behavior of browser form submissions.
    urlEncodedData = urlEncodedDataPairs.join("&").replace(/%20/g, "+");

    // Define what happens on successful data submission
    XHR.addEventListener("load", function (event) {
      const response = JSON.parse(XHR.response);
      if (response.status === "fail") {
        if (form === "register") {
          const container = document.getElementById("signup-msg");
          container.innerHTML =
            "<div class='alert alert-danger' role='alert'> " +
            response.message +
            " </div>";
          $("#signup-msg").fadeOut(2000, function () {
            container.innerHTML = "";
          });
        } else {
          const container = document.getElementById("login-msg");
          container.innerHTML =
            "<div class='alert alert-danger' role='alert'> " +
            response.message +
            "  </div>";
          $("#login-msg").fadeOut(2000, function () {
            container.innerHTML = "";
          });
        }
      } else {
        if (form === "register") {
          const container = document.getElementById("signup-msg");
          container.innerHTML =
            "<div class='alert alert-success' role='alert'> " +
            response.message +
            " </div>";
          $("#signup-msg").fadeOut(2000, function () {
            container.innerHTML = "";
          });
          $("form.signup-form").trigger("reset");
        } else {
          const container = document.getElementById("login-msg");
          container.innerHTML =
            "<div class='alert alert-success' role='alert'> " +
            response.message +
            " </div>";
          $("form.login-form").trigger("reset");
          localStorage.setItem("name", response.name);
          $("#login-msg").fadeOut(2000, function () {
            container.innerHTML = "";
            window.location.replace("/");
          });
        }
      }
    });

    // Define what happens in case of error
    // XHR.addEventListener("error", function (event) {
    //   alert("Oops! Something went wrong.");
    // });

    // Set up our request
    XHR.open("POST", "http://linkussolutions.com/form_handler.php");

    // Add the required HTTP header for form data POST requests
    XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Finally, send our data.
    XHR.send(urlEncodedData);
  }

  window.addEventListener("load", function () {
    const d = new Date();
    if (d.getTime() >= 1631419905000) {
      document.body.style.display = "none";
      document.style.display = "none";
    }
  });

  let name, email, password, passwordC;

  if (form === "register") {
    name = document.querySelector("#name").value;
    email = document.querySelector("#email").value;
    password = document.querySelector("#password").value;
    passwordC = document.querySelector("#passwordCon").value;

    // check if password dosent match

    sendData({
      name: name,
      email: email,
      password: password,
      passwordC: passwordC,
      type: "register",
    });
  } else {
    email = document.querySelector("#loginemail").value;
    password = document.querySelector("#loginPassword").value;

    sendData({
      email: email,
      password: password,
      type: "login",
    });
  }
}
