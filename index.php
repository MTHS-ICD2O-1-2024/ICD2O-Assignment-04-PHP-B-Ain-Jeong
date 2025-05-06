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
      <form action="./answer.php" method="GET">
        <br />
        <div class="page-content-guide">Enter in your age:</div>
        <form>
          <div class="mdl-textfield mdl-js-textfield">
            <input
              class="mdl-textfield__input"
              type="text"
              pattern="-?[0-9]*(\.[0-9]+)?"
              name="customer-age" />
            <label class="mdl-textfield__label" for="customer-age">$20 general, $15 under 3 or 65+</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <div class="page-content-guide">
            Tour Options
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <select class="mdl-textfield__input" name="tour-option">
              <option value="self-tour">Self-Guided Audio Tour ($5)</option>
              <option value="private-tour">Private Guided Tour (less than 5, $45)</option>
              <option value="group-tour">Large Group Guided Tour (more than 6, $12)</option>
            </select>
          </div>
          <br />
          <button
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Check The Price
          </button>
        </form>
        <br />
        <div class="page-content-answer">
          <div id="answer"></div>
        </div>
    </main>
  </div>
</body>

</html>