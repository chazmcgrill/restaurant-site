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
        <h3>Hello there!</h3>
        <p class="lead">Mustache hashtag chillwave, DIY gastropub migas cardigan poke hammock chartreuse salvia humblebrag lumbersexual before they sold out. Kale chips iPhone helvetica godard sustainable. Williamsburg seitan chartreuse VHS. Semiotics wayfarers live-edge pok pok. Bitters raclette vexillologist, forage wolf hammock master cleanse cred palo santo pop-up.</p>
        <br/>
        <p>Mixtape copper mug taxidermy, live-edge small batch 3 wolf moon shoreditch keffiyeh direct trade banjo snackwave tofu shabby chic. Narwhal +1 asymmetrical everyday carry chicharrones roof party, mustache forage tote bag man bun.</p>
      </div>
    </div>
  </section>

  <section class="menu-section">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>Burgers</h2>
        <div class="menu">
          <div class="menu-item">
            <h4 class="menu-item--title">Big Kahuna Burger</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£7.99</div>
          </div>
          <div class="menu-item">
            <h4 class="menu-item--title">Royale with Cheese</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£5.99</div>
          </div>
          <div class="menu-item">
            <h4 class="menu-item--title">Double Kahuna</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£8.99</div>
          </div>
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
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Hipster</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star.svg"); ?>
              </div>
            </div>
            <p class="review--text">Kale chips iPhone helvetica godard sustainable.</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Chillwave</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
              </div>
            </div>
            <p class="review--text">DIY gastropub migas cardigan poke hammock chartreuse</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Wayfarers</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star.svg"); ?>
              </div>
            </div>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Wayfarers</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
              </div>
            </div>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Hipster</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
              </div>
            </div>
            <p class="review--text">Kale chips iPhone helvetica godard sustainable.</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Chillwave</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star.svg"); ?>
              </div>
            </div>
            <p class="review--text">DIY gastropub migas cardigan poke hammock chartreuse</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Chillwave</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
              </div>
            </div>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <div class="review--top">
              <h5 class="review--user">Wayfarers</h5>
              <div class="review--stars">
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
                <?php include("assets/img/SVG/star-checked.svg"); ?>
              </div>
            </div>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-findus">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>find us</h2>
        <div class="locations">
          <div class="location">
            <h5 class="location--city">Leeds</h5>
            <p class="location--address">ABC Street Name</p>
            <p class="location--address">LEEDS</p>
            <p class="location--address">LS1 3AB</p>
          </div>
          <div class="location">
            <h5 class="location--city">Manchester</h5>
            <p class="location--address">ABC Street Name</p>
            <p class="location--address">MANCHESTER</p>
            <p class="location--address">M1 3AB</p>
          </div>
          <div class="location">
            <h5 class="location--city">London</h5>
            <p class="location--address">ABC Street Name</p>
            <p class="location--address">LONDON</p>
            <p class="location--address">E1 3AB</p>
          </div>
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
        <h5 class="location--city">Leeds</h5>
        <p class="location--address">ABC Street Name</p>
        <p class="location--address">LEEDS</p>
        <p class="location--address">LS1 3AB</p>
      </div>
    </div>
  </footer>


  <script src="./assets/js/app.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?php $apiKey ?>&callback=initMap" async defer></script>

  
</body>
</html>