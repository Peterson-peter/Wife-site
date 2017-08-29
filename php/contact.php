
  <?php

  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }


  $field_name = test_input($_POST['name']);
  $field_email = test_input($_POST['email']);
  $field_message = test_input($_POST['message']);

  $mail_to = 'contact@esrlt.com';
  $subject = 'New Contact Message from '.$field_name;

  $body_message = 'Name: '.$field_name."\n";
  $body_message .= 'E-mail: '.$field_email."\n";
  $body_message .= 'Message: '.$field_message;

  $headers = 'Name: '.$field_email."\r\n";
  $headers .= 'Email: '.$field_email."\r\n";

  if ($field_name || $field_email || $field_message ) {
  $mail_status = mail($mail_to, $subject, $body_message, $headers);
  }
  if ($mail_status) { ?>
      <script language="javascript" type="text/javascript">
          alert('Thank you for your message.');
      window.location = 'http://esrlt.com/#contact';
      </script>
      <?php
       }
  else { ?>
       <script language="javascript" type="text/javascript">
          alert('Could not send the message');
      window.location = 'http://esrlt.com/#contact';
       </script>
  <?php
  }
  ?>
