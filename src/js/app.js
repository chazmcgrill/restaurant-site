// -------- ORDER FORM MODAL 

const orderBtn = document.querySelectorAll('.order-btn');
const order = document.getElementById('order');
const orderModal = document.getElementById('order-modal');

let open = false;

function orderFormToggle() {
  if (!open) {
    order.classList.remove('a-fade-out');
    order.classList.remove('is-hidden');
    order.classList.add('a-fade-in');
  } else {
    order.classList.remove('a-fade-in');
    order.classList.add('a-fade-out');
    setTimeout(() => {
      order.classList.add('is-hidden');
    }, 300)
  }
  open = !open;
}

orderBtn.forEach(el => {
  el.addEventListener('click', orderFormToggle);
});


// -------- GOOGLE MAPS

function initMap() {

  const mapInfo = [
    { title: 'Leeds Restaurant', latlng: { lat: 53.801277, lng: -1.548567 } },
    { title: 'Manchester Restaurant', latlng: { lat: 53.483959, lng: -2.244644 } },
    { title: 'London Restaurant', latlng: { lat: 51.509865, lng: -0.118092 } },
  ];

  // Create a map object and specify the DOM element for display.
  const map = new google.maps.Map(document.getElementById('map'), {
    center: mapInfo[0].latlng,
    zoom: 15,
    styles: mapStyles
  });

  function createMarker(m) {
    new google.maps.Marker({
      map: map,
      position: m.latlng,
      title: m.title
    });
  }

  // Interate through create a marker for items
  mapInfo.forEach(m => createMarker(m));

}

