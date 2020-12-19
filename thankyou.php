<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">

  <link rel='shortcut icon' type='image/x-icon' href='./img/uses/cassette.svg' />
  <link rel="apple-touch-icon" href="./img/uses/cassette.svg" />

  <title>Cassette player Promotion for Chrismart - Thank you page</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="thank-you">
  <header>
  <?php
	// Grab the global navigation HTML 
	include '/home/Le200443551/public_html/comp1002/project1_html/includes/global-nav.php';
?>
  </header>
  <section class="thank-you-page">
      <h4 style="font-size: 3.2rem; color: #F9A7A7"> Thank you for your feedback</h4>
      <?php
    // Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
      $emailAddress = $_GET['emailAddress'];
    // Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
      echo('<p>Your email address, '.$emailAddress.' has been send to us</p>');
    ?>
    </div>
  </section>

  <footer>
    <a target="_blank" href="https://www.facebook.com/felix.leCoder">Copyright Felix Le</a>
  </footer>
  <script type="text/javascript" src="js/helper.js" defer></script>
  <script type="text/javascript" src="js/main.js" defer></script>

</body>

</html>