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
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>facebook</title><path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>instagram</title><path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path><path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path><path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>yelp</title><path d="M19.027 20.421c-0.54 0.545-0.083 1.535-0.083 1.535l4.065 6.788c0 0 0.668 0.895 1.246 0.895 0.581 0 1.155-0.477 1.155-0.477l3.214-4.594c0 0 0.324-0.58 0.331-1.087 0.012-0.722-1.077-0.92-1.077-0.92l-7.609-2.444c-0 0-0.746-0.198-1.242 0.303zM18.642 17c0.389 0.66 1.463 0.468 1.463 0.468l7.592-2.219c0 0 1.035-0.421 1.182-0.982 0.145-0.561-0.171-1.238-0.171-1.238l-3.628-4.274c0 0-0.314-0.54-0.967-0.595-0.719-0.061-1.162 0.809-1.162 0.809l-4.29 6.75c0 0-0.379 0.672-0.020 1.28zM15.055 14.368c0.894-0.22 1.036-1.519 1.036-1.519l-0.061-10.808c0 0-0.135-1.333-0.734-1.695-0.94-0.57-1.218-0.272-1.487-0.233l-6.303 2.342c0 0-0.617 0.204-0.939 0.719-0.459 0.73 0.466 1.798 0.466 1.798l6.551 8.93c0 0 0.647 0.669 1.47 0.465zM13.498 18.742c0.023-0.834-1.001-1.334-1.001-1.334l-6.775-3.423c0 0-1.004-0.414-1.491-0.126-0.373 0.221-0.704 0.62-0.737 0.973l-0.441 5.432c0 0-0.066 0.941 0.178 1.369 0.345 0.608 1.482 0.184 1.482 0.184l7.909-1.748c0.307-0.207 0.846-0.225 0.876-1.328zM15.465 21.673c-0.679-0.349-1.491 0.373-1.491 0.373l-5.296 5.83c0 0-0.661 0.892-0.493 1.439 0.158 0.513 0.42 0.768 0.791 0.948l5.319 1.679c0 0 0.645 0.134 1.133-0.008 0.693-0.201 0.565-1.286 0.565-1.286l0.12-7.894c-0 0-0.027-0.76-0.648-1.082z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>twitter</title><path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path></svg>
      </div>
      <div class="navbar--logo">Burgers</div>
      <div class="navbar--btn btn">Order Online</div>
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
            <h4 class="menu-item--title">Title 1</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£5.99</div>
          </div>
          <div class="menu-item">
            <h4 class="menu-item--title">Title 2</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£5.99</div>
          </div>
          <div class="menu-item">
            <h4 class="menu-item--title">Title 3</h4>
            <p class="menu-item--text">Readymade hammock tbh next level crucifix mumblecore tattooed, yr hot chicken.</p>
            <div class="menu-item--price">£5.99</div>
          </div>
        </div>
        <div class="full-menu-button">full menu</div>
      </div>
    </div>
  </section>

  <section class="section-reviews">
    <div class="row row_center">
      <div class="col col_wide">
        <h2>Reviews</h2>
        <div class="reviews">
          <div class="review">
            <h5 class="review--user">Hipster</h5>
            <p class="review--text">Kale chips iPhone helvetica godard sustainable.</p>
          </div>
          <div class="review">
            <h5 class="review--user">Chillwave</h5>
            <p class="review--text">DIY gastropub migas cardigan poke hammock chartreuse</p>
          </div>
          <div class="review">
            <h5 class="review--user">Wayfarers</h5>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <h5 class="review--user">Wayfarers</h5>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <h5 class="review--user">Hipster</h5>
            <p class="review--text">Kale chips iPhone helvetica godard sustainable.</p>
          </div>
          <div class="review">
            <h5 class="review--user">Chillwave</h5>
            <p class="review--text">DIY gastropub migas cardigan poke hammock chartreuse</p>
          </div>
          <div class="review">
            <h5 class="review--user">Wayfarers</h5>
            <p class="review--text">Williamsburg seitan chartreuse VHS. Semiotics wayfarers</p>
          </div>
          <div class="review">
            <h5 class="review--user">Wayfarers</h5>
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
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>facebook</title><path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>instagram</title><path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path><path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path><path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>yelp</title><path d="M19.027 20.421c-0.54 0.545-0.083 1.535-0.083 1.535l4.065 6.788c0 0 0.668 0.895 1.246 0.895 0.581 0 1.155-0.477 1.155-0.477l3.214-4.594c0 0 0.324-0.58 0.331-1.087 0.012-0.722-1.077-0.92-1.077-0.92l-7.609-2.444c-0 0-0.746-0.198-1.242 0.303zM18.642 17c0.389 0.66 1.463 0.468 1.463 0.468l7.592-2.219c0 0 1.035-0.421 1.182-0.982 0.145-0.561-0.171-1.238-0.171-1.238l-3.628-4.274c0 0-0.314-0.54-0.967-0.595-0.719-0.061-1.162 0.809-1.162 0.809l-4.29 6.75c0 0-0.379 0.672-0.020 1.28zM15.055 14.368c0.894-0.22 1.036-1.519 1.036-1.519l-0.061-10.808c0 0-0.135-1.333-0.734-1.695-0.94-0.57-1.218-0.272-1.487-0.233l-6.303 2.342c0 0-0.617 0.204-0.939 0.719-0.459 0.73 0.466 1.798 0.466 1.798l6.551 8.93c0 0 0.647 0.669 1.47 0.465zM13.498 18.742c0.023-0.834-1.001-1.334-1.001-1.334l-6.775-3.423c0 0-1.004-0.414-1.491-0.126-0.373 0.221-0.704 0.62-0.737 0.973l-0.441 5.432c0 0-0.066 0.941 0.178 1.369 0.345 0.608 1.482 0.184 1.482 0.184l7.909-1.748c0.307-0.207 0.846-0.225 0.876-1.328zM15.465 21.673c-0.679-0.349-1.491 0.373-1.491 0.373l-5.296 5.83c0 0-0.661 0.892-0.493 1.439 0.158 0.513 0.42 0.768 0.791 0.948l5.319 1.679c0 0 0.645 0.134 1.133-0.008 0.693-0.201 0.565-1.286 0.565-1.286l0.12-7.894c-0 0-0.027-0.76-0.648-1.082z"></path></svg>
        <svg class="social-icons--icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>twitter</title><path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path></svg>
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