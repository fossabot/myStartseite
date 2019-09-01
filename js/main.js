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

  // give checkout the right env (Production / Test)
  document.getElementById('stripe-checkout').id = (window.location.host === "mystartseite.net") ? 'checkout-button-plan_FjJ1JjcEG0HxDm' : 'checkout-button-plan_FVSMzPuEBUXbiW';

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