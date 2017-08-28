
  <?php
  $field_name = $_POST['name'];
  $field_email = $_POST['email'];
  $field_message = $_POST['message'];

  $mail_to = 'contact@esrlt.com';
  $subject = 'New Contact Message from '.$field_name;

  $body_message = 'Name: '.$field_name."\n";
  $body_message .= 'E-mail: '.$field_email."\n";
  $body_message .= 'Message: '.$field_message;

  $headers = 'Name: '.$field_email."\r\n";
  $headers .= 'Email: '.$field_email."\r\n";

  $mail_status = mail($mail_to, $subject, $body_message, $headers);

  if ($mail_status) { ?>
      <script language="javascript" type="text/javascript">
          alert('Thank you for your message.');
      window.location = 'http://';
      </script>
      <?php
       }
  else { ?>
       <script language="javascript" type="text/javascript">
          alert('Could not send the message');
      window.location = 'http://';
       </script>
  <?php
  }
  ?>
