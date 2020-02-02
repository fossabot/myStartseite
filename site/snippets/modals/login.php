<!--
<form onsubmit="login(this.email.value, this.password.value); this.reset(); return false;" method="POST">

-->

<div class="modal" id="loginModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Login</p>
      <button onclick="$('#loginModal').toggleClass('is-active');" class="delete" aria-label="close"></button>
    </header>
    <form action="login" method="POST">
      <section class="modal-card-body">
        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" value="" placeholder="Email" required>
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password" value="" placeholder="Password" required>
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" type="submit">Log In</button>
      </footer>
    </form>
  </div>
</div>