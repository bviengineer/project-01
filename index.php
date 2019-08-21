<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Obtained page Refresh method from W3Schools: https://www.w3schools.com/tags/att_meta_http_equiv.asp -->
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php 
        include 'inc/functions.php'; 
      ?>
      <!-- <p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p> -->
    </div>
    <button id="loadQuote">Show another quote</button>
    <!-- onclick="window.location.reload(true)"  PREVIOUS CLICK FUNCTION-->
  </div>
  <script src="js/app.js"></script>
</body>
</html>