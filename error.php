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
  $err_code = $_GET['error'];
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;URL=<?php echo $_domain; ?>">
    <link rel="stylesheet" href="styles/error.css" />
    <title>Error <?php echo $err_code; ?></title>
  </head>

  <body>
    <section>
      <article id="article_error">
      <h1>Error</h1>
      <p>
        <strong>
          <?php
            switch($err_code)
            {
              // Client errors:
              case '400':
                echo 'Bad Request: The request cannot be fulfilled due to bad syntax';
              break;
              case '401':
                echo 'Unauthorized: The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided';
              break;
              case '402':
                echo 'Payment Required';
              break;
              case '403':
                echo 'Forbidden: The request was a legal request, but the server is refusing to respond to it';
              break;
              case '404':
                echo 'Not Found: The requested page could not be found but may be available again in the future';
              break;
              case '405':
                echo 'Method Not Allowed: A request was made of a page using a request method not supported by that page';
              break;
              case '406':
                echo 'Not Acceptable: The server can only generate a response that is not accepted by the client';
              break;
              case '407':
                echo 'Proxy Authentication Required: The client must first authenticate itself with the proxy';
              break;
              case '408':
                echo 'Request Timeout: The server timed out waiting for the request';
              break;
              case '409':
                echo 'Conflict: The request could not be completed because of a conflict in the request';
              break;
              case '410':
                echo 'Gone: The requested page is no longer available';
              break;
              case '411':
                echo 'Length Required: The Content-Length is not defined. The server will not accept the request without it';
              break;
              case '412':
                echo 'Precondition Failed: The precondition given in the request evaluated to false by the server';
              break;
              case '413':
                echo 'Request Entity Too Large: The server will not accept the request, because the request entity is too large';
              break;
              case '414':
                echo 'Request-URI Too Long: The server will not accept the request, because the URL is too long. Occurs when you convert a POST request to a GET request with a long query information';
              break;
              case '415':
                echo 'Unsupported Media Type: The server will not accept the request, because the media type is not supported';
              break;
              case '416':
                echo 'Requested Range Not Satisfiable: The client has asked for a portion of the file, but the server cannot supply that portion';
              break;
              case '417':
                echo 'Expectation Failed: The server cannot meet the requirements of the Expect request-header field';
              break;

              // Server errors:
              case '500':
                echo 'Internal Server Error: A generic error message, given when no more specific message is suitable';
              break;
              case '501':
                echo 'Not Implemented: The server either does not recognize the request method, or it lacks the ability to fulfill the request';
              break;
              case '502':
                echo 'Bad Gateway: The server was acting as a gateway or proxy and received an invalid response from the upstream server';
              break;
              case '503':
                echo 'Service Unavailable: The server is currently unavailable (overloaded or down)';
              break;
              case '504':
                echo 'Gateway Timeout: The server was acting as a gateway or proxy and did not receive a timely response from the upstream server';
              break;
              case '505':
                echo 'HTTP Version Not Supported: The server does not support the HTTP protocol version used in the request';
              break;
              case '511':
                echo 'Network Authentication Required: The client needs to authenticate to gain network access';
              break;
              default:
                echo 'Unknown error';
            }
          ?>
          <br/>
           You will be redirected to the homepage in a few seconds.
        </strong>
        </br></br>
        <img src="../images/forbidden.png" alt=""/>
      </p>
      </article>
    </section>
  </body>
</html>
