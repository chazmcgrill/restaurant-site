<?php include('data.php'); ?>

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
      <div class="navbar--btn btn btn_nav">Order Online</div>
    </nav>
    
    <h1>The worlds number one burger</h1>
    <div class="scroll-sign">scroll down</div>
  </header>


  <section class="about">
    <div class="row row_spaced">
      <div class="col">
        <div class="about-img"></div>
      </div>
      <div class="col">
        <h3><?php echo $about['title']; ?></h3>
        <p class="lead"><?php echo $about['lead-text']; ?></p>
        <br/>
        <p><?php echo $about['sub-text']; ?></p>
      </div>
    </div>
  </section>


  <section class="menu-section">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>Burgers</h2>
        <div class="menu">

          <?php foreach($menu as $item) { ?>
            <div class="menu-item">
              <h4 class="menu-item--title"><?php echo $item['title']; ?></h4>
              <p class="menu-item--text"><?php echo $item['text']; ?></p>
              <div class="menu-item--price">£<?php echo $item['price']; ?></div>
            </div>
          <?php } ?>

        </div>
        <div class="full-menu-button btn">full menu</div>
      </div>
    </div>
  </section>


  <section class="section-reviews">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>Reviews</h2>
        <div class="reviews">

          <?php foreach($reviews as $review) { ?>
            <div class="review">
              <div class="review--top">
                <h5 class="review--user"><?php echo $review['user']; ?></h5>
                <div class="review--stars">
                  <?php for($i = 1; $i <= 5; $i++) { 
                    if ($i <= $review['stars']) { ?>
                      <?php include("assets/img/SVG/star-checked.svg"); ?>
                    <?php } else { ?>
                      <?php include("assets/img/SVG/star.svg"); ?>
                  <?php } } ?>
                </div>
              </div>
              <p class="review--text"><?php echo $review['text']; ?></p>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>


  <section class="section-findus">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>find us</h2>
        <div class="locations">

          <?php foreach($locations as $location) { ?>
            <div class="location">
              <h5 class="location--city"><?php echo $location['city']; ?></h5>
              <?php foreach($location['address'] as $line) { ?>
                <p class="location--address"><?php echo $line; ?></p>
              <?php } ?>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="row row_center">
      <div class="col col_full">
        <div class="findus-map" id="map"></div>
      </div>
    </div>
  </section>


  <footer>
    <div class="row row_spaced">
      <nav class="nav">
        <ul>
          <li class="nav--item">about</li>
          <li class="nav--item">menu</li>
          <li class="nav--item">reviews</li>
        </ul>
      </nav>
      <div class="social-icons">
        <?php include('assets/img/SVG/facebook.svg'); ?>
        <?php include('assets/img/SVG/instagram.svg'); ?>
        <?php include('assets/img/SVG/yelp.svg'); ?>
        <?php include('assets/img/SVG/twitter.svg'); ?>
      </div>
      <div class="location location_footer">
        <h5 class="location--city"><?php echo $locations[0]['city']; ?></h5>
        <?php foreach($locations[0]['address'] as $line) { ?>
          <p class="location--address"><?php echo $line; ?></p>
        <?php } ?>
      </div>
    </div>
  </footer>


  <script src="./assets/js/app.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?php $apiKey ?>&callback=initMap" async defer></script>

  
</body>
</html>