<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "info@peace-advantage.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! E-mail send.";

?>


<!--
<form method="post" action="mail.php" name="kontakt">
    <div class="column">
    YOUR NAME<br/><br/>
    <input name="name" id="name" value="" />
    </div>

    <div class="column-2">
    YOUR E-MAIL<br/><br/>
    <input name="email" id="email" value="" />
    </div>


    <div class="column-3">  
    MESSAGE<br/><br/>        
    <textarea id="message" name="message" ></textarea>
    </div> 

      <div class="button">
        <span><input class="submit" id="submit" name="submit" type="submit" value="SEND"></span>
      </div>

    </form>-->
