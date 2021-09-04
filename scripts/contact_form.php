 <?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $body = "A message was sent by " . $name . "\nDetails:\nEmail: " . $email . "\Subject: " . $subject . "\Message: " . $message;
    if (isset($_POST['sb_form'])) {

        echo $body;

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else {
        echo "Error";
    }

    ?>