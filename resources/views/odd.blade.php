<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Odd</title>
  </head>
  <body>

    @include('parts.header')

  	<div id="main-container">
      <h1>Numeri dispari da 10 a 100:</h1>
      <p>

        <?php
        foreach ($oddNumbers as $number) {
          echo $number . " | ";
        }
        ?>
      </p>
  	</div>

    @include('parts.footer')

  </body>
</html>