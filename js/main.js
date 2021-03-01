AOS.init({
  duration: 1000,
});

$(document).ready(function () {
  $(".owl-carousel-info").owlCarousel({
    animateOut: "animate__fadeOut",
    animateIn: "animate__fadeIn",
    items: 1,
    loop: true,
    autoplay: true,
  });

  $(".owl-carousel-phone").owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    nav: false,
    autoplaySpeed: 1500,
    autoplayTimeout: 1500,
  });
});

document.querySelectorAll(".portfolio-btn").forEach(function (item) {
  let btntype = item.dataset.button;
  console.log(btntype);
  item.addEventListener("click", function (e) {
    var elems = document.querySelectorAll(".portfolio-btn");
    [].forEach.call(elems, function (el) {
      el.style.background = "transparent";
      el.style.color = "#fff";
    });
    item.style.background = "#ffbd59";
    item.style.color = "#000";

    var elems = document.querySelectorAll(".dynamic-area");
    [].forEach.call(elems, function (el) {
      el.classList.remove("visible");
    });
    document
      .querySelector('[data-type="' + btntype + '"]')
      .classList.toggle("visible");
  });
});

$(window).scroll(function (e) {
  var $el = $(".portfolio-container");
  var isPositionFixed = $el.css("position") == "fixed";
  if ($(this).scrollTop() > 300 && !isPositionFixed) {
    $el.css({
      position: "fixed",
      padding: 0,
      paddingBottom: 20,
      paddingTop: 20,
      width: "100%",
      top: 0,
      left: 0,
    });
  }
  if ($(this).scrollTop() < 300 && isPositionFixed) {
    $el.css({
      position: "static",
      padding: 0,
      paddingBottom: 20,
      paddingTop: 20,
      width: "100%",
      top: 0,
      left: 0,
    });
  }
});

const controller = new ScrollMagic.Controller();
const scene1 = new ScrollMagic.Scene({
  triggerElement: "#client",
})
  // .addIndicators()
  .setClassToggle("#client, #numbers", "bg-change-white")
  .addTo(controller);
