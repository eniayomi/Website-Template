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
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;URL=<?php echo $_domain; ?>">
    <link rel="stylesheet" href="<?php echo $_domain; ?>/styles/error.css" />
    <title>Error - There is nothing to do here</title>
  </head>

  <body>
    <section>
      <article id="article_error">
        <h1>Error:</h1>
        <p>
          <strong>
            This folder is not accessible</br>
            You will be redirected to the homepage in a few seconds.
          </strong>
          </br></br>
          <img src="<?php echo $_domain; ?>/images/forbidden.png" alt=""/>
        </p>
      </article>
    </section>
  </body>

</html>
