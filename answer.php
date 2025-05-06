<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Dinosaur Museum, with JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.teal-light_green.min.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Dinosaur Museum, with JS</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Dinosaur Museum, with JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img
          src="./images/dinosaurs.png"
          alt="Dinosaurs image" />
      </div>
      <div class="page-content-answer">
        <div id="answer">
          <?php
          $TAX_RATE = 0.13;
          $subTotal = 0;

          // input
          $customerAge = $_GET["customer-age"];
          $tourOption = $_GET["tour-option"];

          // process (customerAge)
          if ($customerAge <= 3 || $customerAge >= 65) {
            $subTotal = $subTotal + 15;
          } else {
            $subTotal = $subTotal + 20;
          }

          // process (tourOption)
          if ($tourOption == "self-tour") {
            $subTotal = $subTotal + 5;
          } else if ($tourOption == "private-tour") {
            $subTotal = $subTotal + 45;
          } else {
            $subTotal = $subTotal + 12;
          }

          // tax calculation
          $tax = $subTotal * $TAX_RATE;
          $totalPrice = $subTotal + $tax;

          // output (https://www.php.net/manual/en/function.number-format.php)
          echo $customerAge . " year-old with " . $tourOption . " option:<br>" .
            "Sub Total: $" . number_format($subTotal, 2) . "<br>" .
            "Tax Rate: $" . number_format($tax, 2) . "<br>" .
            "Total Price: $" . number_format($totalPrice, 2);
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
