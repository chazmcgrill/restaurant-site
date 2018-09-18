<?php include('data.php'); ?>
<?php include('header.php'); ?>

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
      <div class="full-menu-button btn order-btn">full menu</div>
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

<?php include('order.php'); ?>

<?php include('footer.php'); ?>