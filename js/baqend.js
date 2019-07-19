function isUserLoggedIn() {
  try {
    if (DB.User.me != null) {
      // DB.User exists => User is logged in
      console.log("User is null");
      $("#jumbotron").show();
    }
  } catch (e) {
    // DB.User is undefined
    console.log("User not logged in.");
    $("#jumbotron").hide();
    
  }
}

function addBookmark(title, link) {

    // Check if allowed!
    DB.Bookmarks.find()
      .equal('user', DB.User.me)
      .resultList((result) => {
        result.forEach((x) => {
          var json = DB.User.me.bookmarks;
          var obj = {
            "title": title,
            "link": link
          };

          if (json.length < x.limit) {
            json.push(obj);
            updateBookmarks(DB.User.me.id, json);
          }
          else {
            $("#jumbotron").hide();
            $("#limit").show();
          }

          $("#limitbar").attr("value", json.length);
        });
      });
  
  
}

function updateBookmarks(userId, bookmarks) {
  return DB.User.partialUpdate(userId)
    .set('bookmarks', bookmarks) // sets "nickname" to "Alice"
    .execute()
    .then(function () {
      showBookmarks();
    });
}

function deleteBookmark(index) {

  document.getElementById("bookmarks").innerHTML = "";
  $("#jumbotron").show();
  $("#limit").hide();

  var json = DB.User.me.bookmarks;

  json.splice(index, 1);

  updateBookmarks(DB.User.me.id, json);
}

function showBookmarks() {


  var json;
  var l;

  try {
    json = DB.User.me.bookmarks;
    $("#register").hide();
    $("#login").hide();
    json = shuffleArray(json);
    l = json.length;
  }
  catch (e) {
    return false;
  }

  if (l === 0 || typeof (json) == 'undefined') {
    return;
  }

  var html = "";

  for (var i = 0; i < l; i++) {
    var b = json[i];

    html += '<div class="column is-one-quarter">';
    html += '  <div class="card card-background" brand="' + b.title.toLowerCase() + '">';
    html += '   <a href="' + b.link + '" target="_blank">';
    html += '    <header class="card-header">';
    html += '      <p class="card-header-title">' + b.title + '</p>';
    html += '    </header>';
    html += '    <div class="card-content">';
    html += '      <div class="content">';
    //html += '        <a href="' + b.link + '">' + b.link + '</a>';
    //html += '        <p>' + b.link.substring(0,100) + '</p>';
    html += '      </div>';
    html += '    </div>';
    html += '   </a>';
    html += '    <footer class="card-footer" style="border: none">';
    html += '      <p class="card-footer-item" style="justify-content: right; border: none;"></p>';
    html += '      <a class="delete card-footer-item" style="" onclick="deleteBookmark(' + i + ')" aria-label="close"></a>';
    html += '    </footer>';
    html += '  </div>';
    html += '</div>';
  }

  document.getElementById("bookmarks").innerHTML = html;
  $("#limitbar").attr("value", l);
  
  $("#limitbar").attr("max", (l%4==0)?l:l+(4-l%4));
}

function login(email, password) {
  DB.User.login(email, password).then(function () {
    //Hey we are logged in again
    console.log(DB.User.me.username); //'john.doe@example.com' 
    // show add form
    $("#jumbotron").show();
    $('#loginModal').toggleClass('is-active');
    // print bookmarks
    showBookmarks();
  });
}

function logout() {
  DB.User.logout().then(function () {
    //We are logged out again
    console.log(DB.User.me); //null
      // clear view
  document.getElementById("bookmarks").innerHTML = "";
  // hide add form
  $("#jumbotron").hide();
  $("#login").show();
  $("#register").show();
  });
}

function register(email, password) {
  var obj = [{
    "title": "Bookmark Title",
    "link": "Bookmark Link"
  }];

  var json = JSON.stringify(obj);
  json = JSON.parse(json);

  var user = new DB.User({
    'username': email,
    'bookmarks': json
  });

  DB.User.register(user, password).then(function () {

    // Hey we are logged in
    console.log(DB.User.me.username); //'john.doe@example.com'

    // Create Bookmark Entry
    var bookmark = new DB.Bookmarks({ user: DB.User.me, limit: 4}); /* Don´t even think about it! */
    bookmark.save().then(function () { });


    $('#signupModal').toggleClass('is-active');
    // print bookmarks
    showBookmarks();
    $("#jumbotron").show();
  });
}