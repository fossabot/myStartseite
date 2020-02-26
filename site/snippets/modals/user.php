<div class="modal" id="userModal">
  <div class="modal-background" onclick="$('#userModal').toggleClass('is-active');"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title"><i><?= $kirby->user()->email(); ?></i> | Settings</p>
      <button onclick="$('#userModal').toggleClass('is-active');" class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <form action="" method="POST">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Update
            </a>
          </p>
          <div class="control">
            <input class="input" type="email" placeholder="Email" disabled>
          </div>
          <div class="control is-expanded">
            <button type="submit" class="button is-primary is-static">Submit&nbsp;<b>(Coming soon!)</b></button>
          </div>
        </div>
      </form>
      <br />
      <form action="" method="POST">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Update
            </a>
          </p>
          <div class="control">
            <input class="input" type="password" placeholder="Password" disabled>
          </div>
          <div class="control is-expanded">
            <button type="submit" class="button is-primary is-static">Submit&nbsp;<b>(Coming soon!)</b></button>
          </div>
        </div>
      </form>
    </section>
    <footer class="modal-card-foot">
      <a href="user.json" target="_blank" class="button is-info">Request My Data</a>
      <form action="user" method="POST" onsubmit="return confirm('This action cannot be reverted! Are you sure you want to delete your account?');">
        <input type="hidden" name="user" value="<?= $kirby->user()->email(); ?>" />
        <input class="button is-danger" type="submit" name="deleteUser" value="Delete Account" />
      </form>
      
      
    </footer>
  </div>
</div>