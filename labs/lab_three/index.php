<!-- html format -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
</head>
<body>

<main>
  <h2>Contact Us</h2>

   <!-- Contact form that sends user input to process.php -->
  <form action="process.php" method="post">

    <fieldset>
      <legend>Your Info</legend>

      <!-- First name input -->
      <label for="first_name">First Name</label><br>
      <input type="text" id="first_name" name="first_name" required><br><br>

      <!-- Last name input -->
      <label for="last_name">Last Name</label><br>
      <input type="text" id="last_name" name="last_name" required><br><br>

      <!-- Email input  -->
      <label for="email">Email</label><br>
      <input type="email" id="email" name="email" required><br><br>
    </fieldset>

    <fieldset>
      <legend>Your Message</legend>

      <!-- User's Message input -->
      <label for="message">Message</label><br>
      <textarea id="message" name="message" rows="5" required></textarea><br><br>
    </fieldset>

    <button type="submit">Send</button>

  </form>
</main>

</body>
</html>
