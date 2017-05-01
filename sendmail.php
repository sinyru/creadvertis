<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "znchen720@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: http://www.github.com/sinyru" );
?>
