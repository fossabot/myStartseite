<div class="modal" id="signupModal">
  <div class="modal-background" onclick="$('#signupModal').toggleClass('is-active');"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Register</p>
      <button onclick="$('#signupModal').toggleClass('is-active');" class="delete" aria-label="close"></button>
    </header>
    <form action="signup" method="POST">
      <section class="modal-card-body">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" name="email" value="" placeholder="Email" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <p class="help"><i style="color: rgba(80,80,80,.5)">It is obvious that the email will be saved and used by myStartseite.net!? - For authentication.</i> 😬</p>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" name="password" value="" placeholder="Password" required>
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
              <p class="help"><i style="color: rgba(80,80,80,.5)">Let's be honest - nobody wants to retype a password!</i></p>
            </p>
          </div>
        
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" name="signup" type="submit">Sign Up</button>     
      </footer>
    </form>
  </div>
</div>