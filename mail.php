<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['phone'];
  $number = $_POST['people'];
  $message  = $_POST['message'];

  $mailheader = "From:".$name."<".$email.">\r\n";


  $recipient = "csajkasnorbert8637@gmail.com";

  mail($recipient, $text, $number, $mailheader)
  or die("Error");

  echo '<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Jail Club</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <h1 style="text-align:center;">Thank you for contacting me. I will get back to you as soon as possible!</h1>
      <p class="back" style="text-align:center;">
        Go back to the <a href="index.html" style="color:#828282; font-style:italic;">Homepage</a>
      </p>
    </div>
  </body>
';
 ?>
