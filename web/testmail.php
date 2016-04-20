
<?php
$to      = 'prosto2590@mail.ru';
$subject = 'Новая заявка ЕГАИС';
$message = 'hello';
$headers = 'From: egais@avicentr.ru' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
      Mail test
    </title>
  </head>
  <body>
    <?php echo $message; ?>
    <form method="post" action="">
      <table>
        <tr>
          <td>
            e-mail
          </td>
          <td>
            <input name="email" value="<?php if (isset($_POST['email'])
            && !empty($_POST['email'])) echo $_POST['email']; ?>">
          </td>
        </tr>
        <tr>
          <td>
            subject
          </td>
          <td>
            <input name="subject">
          </td>
        </tr>
        <tr>
          <td>
            message
          </td>
          <td>
            <textarea name="body"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
          <td>
            <input type="submit" value="send" name="submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>