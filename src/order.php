<div class="order order--overlay is-hidden a-fade-out" id="order">
  <div class="order--modal a-slide-out" id="order-modal">

    <div class="order--nav">
      <p>Pick your items:</p>
      <div>
        <?php include('assets/img/svg/basket.svg'); ?>
        <?php
          $cross = file_get_contents('assets/img/svg/cross.svg');
          $cross_order = str_replace('{{class-name}}', ' order-btn', $cross);
          echo $cross_order; 
        ?>
      </div>
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