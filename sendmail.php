<?php
  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $message = $_REQUEST['comments'] ;

  mail( "znchen720@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "" );
?>
