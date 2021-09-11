window.addEventListener("load", function () {
  const d = new Date();
  if (d.getTime() >= 1631419905000) {
    document.body.style.display = "none";
    document.style.display = "none";
  }
});

$(function () {
  $(".intro").addClass("go");

  $(".reload").click(function () {
    $(".intro")
      .removeClass("go")
      .delay(200)
      .queue(function (next) {
        $(".intro").addClass("go");
        next();
      });
  });
});

const logout = () => {
  localStorage.removeItem("name");
  window.location.replace("/");
};
