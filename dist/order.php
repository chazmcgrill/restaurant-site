<div class="order--overlay is-hidden order-btn" id="order-modal">
  <div class="order--modal">

    <div class="order--nav">
      <p>Place your order:</p>
      <?php include('assets/img/svg/basket.svg'); ?>
    </div>

    <div class="order--menu">
  
      <?php foreach ($menu as $item) { ?>
        <div class="menu-item">
          <h4 class="menu-item--title"><?php echo $item['title']; ?></h4>
          <p class="menu-item--text"><?php echo $item['text']; ?></p>
          <div class="menu-item--price">£<?php echo $item['price']; ?></div>
        </div>
      <?php } ?>
  
    </div>

    <div class="order--btn">
      <div class="btn">View Basket</div>
    </div>
  </div>
</div>