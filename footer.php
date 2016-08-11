<?php
  function getDomain() {
    if(isset($_SERVER['HTTPS'])){
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else {
      $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['SERVER_NAME'];
  }

  $_domain = getDomain();
?>

      <footer>
        <div>
          <p id="w3c_compatibility">
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_domain; ?>&profile=css3" target=_blank><img src="images/css_ok.png" title="Note: W3C does not allow browser specific elements... This means W3C test will give some false positive errors." alt="Valid CSS 3" /></a>
            <a href="https://validator.w3.org/check?uri=<?php echo $_domain; ?>" target=_blank><img src="images/html_ok.png" title="Valid HTML 5 website" alt="Valid HTML 5" /></a>
            <img src="images/IE.png" title="Compatible with Internet Explorer (but not optimized for old version)"  alt="Intenet Explorer" />
            <img src="images/chrome.png" title="Compatible with Google Chrome"  alt="Google Chrome" />
            <img src="images/firefox.png" title="Compatible with Firefox" alt="Firefox" />
            <img src="images/safari.png" title="Compatible with Safari" alt="Safari" />
            <img src="images/opera.png" title="Compatible with Opera" alt="Opera" />
          </p>
          <p title="Please make sure to understand your rights when using this template">
            <a href="https://github.com/QuentinCG/Website-Template" id="legal_notice">All rights reserved © 2011-<?php echo date('Y'); ?></a>
          </p>
        </div>
      </footer>

    </div>

    <!-- Load scripts at the end -->
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/easing.js" type="text/javascript"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <script type="text/javascript">
      $.noConflict();
      jQuery(document).ready(function($) {
        $(document).ready(function() {
          $().UItoTop({ easingType: 'easeOutQuart' });
        });
      });
    </script>

  </body>
</html>
