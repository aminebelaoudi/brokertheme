$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $("#slideshow > div:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo("#slideshow");
}, 3000);

$("#msform").on("submit", function(e) {
  $(".next").addClass("hidden");
  $(".loading").removeClass("hidden");
});
