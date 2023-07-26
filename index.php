<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="./modules/bootstrap/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      defer
      src="./modules/bootstrap/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/index.css" />
  </head>
  <body>
    <header>
      <h1>MAGNETIC</h1>
      <h2>Ads that work</h2>
    </header>
    <main>
      <h3>JOIN OUR BETA LIST</h3>
      <form method="post" action="">
        <input name="email" type="email" placeholder="YOUR EMAIL ADDRESS" />
        <button type="submit">SUBMIT</button>
      </form>
    </main>
    <?php 
      if(isset($_POST['email'])) {
        echo "email sent";
      }
    ?>
  </body>
</html>
