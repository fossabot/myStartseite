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

  // One-Pager! Prevent form resubmission
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
  
});

function checkURL(url) {
  var s = url.value;
  if (!~s.indexOf("://")){
      s = "https://" + s;
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

function toggleTag(tag) {

  var t = String(tag);
  $("#bookmarks").find("span.tag").css("border", "none");
  $("#bookmarks").find("span.tag").css("opacity", "0.2");

  if (localStorage.getItem("tag") == t) {
    $("#bookmarks").children().show();
    localStorage.removeItem("tag");
  }
  else {
    $("#bookmarks").children().hide();

    $("#bookmarks").children().each(function() {

      var s = String($(this).attr("data-tags"));
            
      if (s.includes(t)) {
        $(this).show();
        
        var s = "span:contains('" + t + "')";
        $(s).css("border", "1px solid black");
        $(s).css("opacity", "0.5");
      }
    });
  
    localStorage.setItem("tag", t);
  }
}