// -------- ORDER FORM MODAL 

const orderBtn = document.querySelectorAll('.order-btn');
const orderForm = document.getElementById('order-modal');

function orderFormToggle() {
  orderForm.classList.toggle('is-hidden');
}

orderBtn.forEach(el => {
  el.addEventListener('click', orderFormToggle);
});


// -------- GOOGLE MAPS

function initMap() {
  
  var myLatLng = { lat: 53.801277, lng: -1.548567 };

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 15,
    styles: mapStyles
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Leeds Restaurant'
  });

  var myLatLng2 = { lat: 56.801277, lng: -1.548567 };

  new google.maps.Marker({
    map: map,
    position: myLatLng2,
    title: 'Manchester Restaurant'
  });

  var myLatLng3 = { lat: 52.801277, lng: -1.548567 };

  new google.maps.Marker({
    map: map,
    position: myLatLng3,
    title: 'London Restaurant'
  });
}

