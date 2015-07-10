<?php

  // Get a key from http://randomkeygen.com/
  $key = "12345";
  
  $hash = $_GET["hash"];
  
  if($hash == $key){
    $to      = $_GET["to"];
    $from    = $_GET["from"];
    $subject = $_GET["subject"];
    $message = $_GET["message"];
    $headers = 'From: '.$from. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $success = mail($to, $subject, $message, $headers);  
    
    if($success){
      echo "Ok.";
    } else {
      echo "Mail failed to send.";
    }

  } else {
    echo "Incorrect hash code.";
  }
  
  // From R...
  /*
  
  require(RCurl)
  result <- getURL("http://example.com/mailer.php?hash=12345&to=2141234567@txt.att.net&from=person@example.com&subject=R%20Script.&message=Your%20R%20Script%20has%20finished.")
  
  */
  
?>
