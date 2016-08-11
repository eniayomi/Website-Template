<?php
  // Define all meta information to use in header
  $meta_title = "Contact me";
  $meta_description = "Contact";
  $meta_keywords = "contact, template, website";

  //$additionnal_meta = '<meta name="" content=""/>';
  //$additionnal_link = '<link rel="" href="" />';

  include 'header.php';
?>

      <section>
        <article id="article_with_image">
          <h1>Contact me</h1>
          <p>
            <img src="images/email.gif" title="E-Mail" alt="E-Mail" class="contact" />
            &nbsp;&nbsp;<strong>E-Mail address</strong>:<br/>
            <img src="images/mail.png" title="Mon adresse e-mail" alt="My email address" class="contact" /><br/>
          </p>
        </article>
      </section>

<?php
  include("footer.php");
?>
