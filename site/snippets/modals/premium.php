<div class="modal" id="premiumModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Pricing</p>
      <button onclick="$('#premiumModal').toggleClass('is-active');" class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p><strong>As easy as the tool itself ... hopefully &#128517;</strong></p><br />
      <!---->
      <div class="pricing-table is-comparative">
        <div class="pricing-plan is-features">
          <div class="plan-header">Features</div>
          <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
          <div class="plan-items">
            <div class="plan-item">Bookmarks</div>
          </div>
          <div class="plan-footer">

          </div>
        </div>
        <div class="pricing-plan">
          <div class="plan-header">Free</div>
          <div class="plan-price"><span class="plan-price-amount"><span
                class="plan-price-currency">€</span>0</span>/year</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Bookmarks">4</div>
          </div>
          <div class="plan-footer">
            <button class="button is-fullwidth" disabled="disabled">Current plan</button>
          </div>
        </div>

        <div class="pricing-plan is-active">
          <div class="plan-header">Premium</div>
          <div class="plan-price"><span class="plan-price-amount"><span
                class="plan-price-currency">€</span>9</span>/year</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Bookmarks">unlimited</div>
          </div>
          <div class="plan-footer content is-small">
            <a class="button is-fullwidth" id="stripe-checkout" role="link">Checkout</a>
            <em>(Redirect to Stripe)</em>
          </div>
        </div>
      </div>
      <p><i>There is nothing more to add ...</i></p>
      <!---->
      <div class="notification is-info" style="margin-top: 3rem;">
        The <a href="https://github.com/kreativ-anders/myStartseite/tree/master/assetts/brands" target="_blank">collection of the brand-backgrounds</a> are based on usage and are crafted manually with &#9749; + &#10084;.
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-text" onclick="$('#premiumModal').toggleClass('is-active');">Cancel</button>
    </footer>
  </div>
</div>