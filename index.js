window.onscroll = function() {myFunction()};
const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

$(document).ready(function() {
  $("#toggle").click(function() {
    const elem = $("#toggle").text();
    if (elem == "Read More") {
      $("#toggle").text("Read Less");
      $("#text").css("display", "block");
    } else {
      $("#toggle").text("Read More");
      $("#text").css("display", "none");
    }
  });
});