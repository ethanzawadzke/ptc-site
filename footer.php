<footer class="footer-container">
  <div class="footer-width">
    <div class="footer-logo"></div>
    <div class="footer-content-container">
      <section class="footer-left">
        <div class="footer-subscribe-container">
          <h2 class="footer-subscribe-header">Subscribe</h2>
          <p class="footer-subscribe-body">
            Subscribe now and stay up to date with our latest insights
          </p>
          <form class="subscribe-form" id="subscribe-form">
              <input type="email" id="email-input-main" class="email-input-main" placeholder="Email address">
              <button id="subscribe-button" class="subscribe-button" type="submit"><span>Subscribe</span></button>
          </form>
        </div>
      </section>
      <section class="footer-right">
        <nav class="footer-nav-links">
          <a href="<?php echo home_url('/about'); ?>">About</a>
          <a href="<?php echo home_url('/services'); ?>">Services</a>
          <a href="<?php echo home_url('/our-clients'); ?>">Our Clients</a>
          <a href="<?php echo home_url('/insights'); ?>">Insights</a>
          <a href="<?php echo home_url('/contact'); ?>">Contact</a>
        </nav>
        <address class="footer-address">
          Fort Worth, Texas, 76147<br>
          P.O. Box 470930<br>
          505.699.5167
        </address>
      </section>
    </div>
    <div class="footer-bottom-container">
      <div class="footer-copyright">
        &copy; 2021-2023 Plot Twist Consulting
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var options = {
      strings: [
        'Transforming',
        'Automating',
        'Pioneering',
        'Engineering',
        'Optimizing',
        'Innovating',
        'Advancing',
        'Empowering',
        'Redefining',
        'Elevating',
        'Strengthening',
      ],
      typeSpeed: 50,
      backSpeed: 50,
      backDelay: 2200,
      loop: true,
      loopCount: Infinity
    };

    var typed = new Typed('#typed', options);
  });
</script>

<script>
  window.addEventListener('load', function() {
    setTimeout(function() {
      window.dispatchEvent(new Event('resize'));
    }, 100);
  });
</script>

</body>
  