<?php
  $emailTo = "yaelrbrown@gmail.com";
  $subject = "PHP Email Test";
  $body = "Testing...";
  $headers = "From: hi@yaelbrown.io";

  if (mail($emailTo, $subject, $body, $headers)) {
      echo "The email was sent successfully.";
  }  else {
      echo "The email could not be sent.";
  }

  // use mandrill or mailchimp
  // change from email to the server you are on
  // avoid email going to spam - http://www.velvetblues.com/web-development-blog/avoid-spam-filters-with-php-mail-emails/

?>

<script type="text/javascript">
  // JQuery for preventing page from refreshing on submit.
  $("form").submit(function (e) {
    e.preventDefault();
  })
</script>