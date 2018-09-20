<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Restaurant</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="social-icons">
        <?php include('assets/img/SVG/facebook.svg'); ?>
        <?php include('assets/img/SVG/instagram.svg'); ?>
        <?php include('assets/img/SVG/yelp.svg'); ?>
        <?php include('assets/img/SVG/twitter.svg'); ?>
      </div>
      <div class="navbar--logo">Burgers</div>
      <div class="navbar--btn btn btn_nav order-btn a-bounce">Order Online</div>
    </nav>
    
    <h1><?php echo $title; ?></h1>
    <div class="scroll-sign a-flash">scroll down</div>
  </header>