<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta name="description" content="">
  
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/brands.css">

</head>
<body>

  <div class="page">
    <header class="header">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <img src="assets/logo/logo.svg" width="112" height="28">
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-rounded is-warning is-static">
                  #StopPinTab
                </a>
                <a class="button is-rounded is-warning" style="background-color: #009cde">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="Q5FEJZKEAR4H4" />
                    <input src-root="https://github.com/andreostrovsky/donate-with-paypal" style="width: 190px; padding-top: 6px;" type="image" src="assets/blue-donate-with-PayPal-button.svg" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_DE/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </a>
              </div>
            </div>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <?php  if(!$kirby->user()): ?>
                  <button id="register" class="button" onclick="$('#signupModal').toggleClass('is-active');">Register</button>
                  <button id="login" class="button" onclick="$('#loginModal').toggleClass('is-active');">Login</button>
                <?php endif; ?>
                <?php  if($kirby->user()): ?>
                  <a id="logout" href="logout" class="button" onclick="logout()">Logout</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

