$(document).ready(function () {

  $("#suchen").click(function () {
    Suchen($("#search").val());
  });

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function () {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
  
});

function checkURL(url) {
  var s = url.value;
  if (!~s.indexOf("://")){
      s = "http://" + s;
  }
  url.value = s;
  return url
}

function changeData(id, title, link, tags) {
  $("#id").attr("value", id);
  $("#title").attr("value", title);
  $("#link").attr("value", link);
  $("#tags").attr("value", tags);
}