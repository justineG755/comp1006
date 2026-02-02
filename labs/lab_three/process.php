<?php
//grab the data, clean and store in a variable (sanatize)
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName  = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message   = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

//validation 
$errors = [];

//require fields
if ($firstName === null || $firstName === '') {
    $errors[] = "First Name is required";
}

if ($lastName === null || $lastName === '') {
    $errors[] = "Last Name is required";
}

//require email and validate proper format
if ($email === null || $email === '') {
    $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email must be valid";
}

//require message
if ($message === null || $message === '') {
    $errors[] = "Message is required";
}

//if there are errors, display to user and stop
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    //stop the script from executing
    exit;
}
?>

<!-- html format -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Received</title>
</head>
<body>

<main>
  <h2>Thanks, <?php echo $firstName; ?>!</h2>

  <p>We received your message.</p>

  <!-- echo the data the user submitted -->
  <h3>Details</h3>
  <p><strong>Name:</strong> <?php echo $firstName . " " . $lastName; ?></p>
  <p><strong>Email:</strong> <?php echo $email; ?></p>
  <p><strong>Message:</strong> <?php echo $message; ?></p>
</main>

</body>
</html>
