<!DOCTYPE html>
<html lang="en">
<head>
        <style type="text/css">
            h5{
                color: blue;
            }
            .p1{
                text-align: justify;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
<body>
<?php
include 'includes/header.php';
?>
<div style="margin-top: -4em; padding-top: 2.5em; background-color: #e4cda7" id="about">
      <div>
        <h2 style="margin-left: 20em; margin-bottom:2em;">About Us</h2>
        <p
          style="
            text-align: center;
            width: 43em;
            margin-left: 25em;
            letter-spacing: 1.5px;
            line-height: 2;
            margin-bottom:5em
          "
        >
          <em>
            Nous nous mettons à votre disposition notre mini projet qui vendre les
            appareils reconditionnés à moyen prix </br> notre site développer en Html CSS Javascript & PHP</em
          >
        </p>
      </div>
      <div
        class="about"
        style="
          display: flex;
          justify-content: space-evenly;
          padding-top: 1em;
          padding-bottom: 4em;
          padding-left: 12em;
        "
      >
        <div style="margin-right: 10em;">
          <img
            src="data:image/jpeg;base64,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"
            alt="Paris"
            width="200"
            height="200"
            style="border-radius: 10em;"
          />
          <h2 style="font-family: Comic sans MS; padding-left: -0.5em">
            Hazem Charfa
          </h2>
          <h3 style="font-family: Comic sans MS; padding-left: 2em">E-BUS2</h3>
        </div>
        
      </div>
    </div>
    <div >
<?php
include 'includes/footer.php';
?>
</body>
</html>