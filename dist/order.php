<div class="order--overlay">
  <div class="order--modal">

    <div class="order--menu">
  
      <?php foreach ($menu as $item) { ?>
        <div class="menu-item">
          <h4 class="menu-item--title"><?php echo $item['title']; ?></h4>
          <p class="menu-item--text"><?php echo $item['text']; ?></p>
          <div class="menu-item--price">£<?php echo $item['price']; ?></div>
        </div>
      <?php } ?>
      <?php foreach ($menu as $item) { ?>
        <div class="menu-item">
          <h4 class="menu-item--title"><?php echo $item['title']; ?></h4>
          <p class="menu-item--text"><?php echo $item['text']; ?></p>
          <div class="menu-item--price">£<?php echo $item['price']; ?></div>
        </div>
      <?php } ?>
      <?php foreach ($menu as $item) { ?>
        <div class="menu-item">
          <h4 class="menu-item--title"><?php echo $item['title']; ?></h4>
          <p class="menu-item--text"><?php echo $item['text']; ?></p>
          <div class="menu-item--price">£<?php echo $item['price']; ?></div>
        </div>
      <?php } ?>
  
    </div>
  </div>
</div>