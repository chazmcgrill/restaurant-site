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
        <?php foreach ($locations[0]['address'] as $line) { ?>
          <p class="location--address"><?php echo $line; ?></p>
        <?php 
      } ?>
      </div>
    </div>
  </footer>


  <script src="./assets/js/app.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?php $apiKey ?>&callback=initMap" async defer></script>

</body>
</html>