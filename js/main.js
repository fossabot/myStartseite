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

  Sentry.init({ dsn: 'https://53d88f97d3f3412e8e9276ca328e8b1b@sentry.io/1548137' });

  connectBaqend();

});

function connectBaqend() {

  try {

    const app = 'about-blank';
    DB.connect(app).then(function () {
      isUserLoggedIn();
      showBookmarks();
    });
  }
  catch (e) {
    DB.log.error('Dooms Day: ' + e);
    return;
  }
}

function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var temp = array[i];
      array[i] = array[j];
      array[j] = temp;
  }

  return array;
}

function checkURL(url) {
  var s = url.value;
  if (!~s.indexOf("://")){
      s = "http://" + s;
  }
  url.value = s;
  return url
}