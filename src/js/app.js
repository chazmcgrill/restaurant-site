// -------- ORDER FORM MODAL 

const orderBtn = document.querySelectorAll('.order-btn');
const order = document.getElementById('order');
const orderModal = document.getElementById('order-modal');
const body = document.querySelector('body');

// toggle animation classes
function orderAnimToggle() {
  order.classList.toggle('a-fade-out');
  order.classList.toggle('a-fade-in');
  orderModal.classList.toggle('a-slide-out');
  orderModal.classList.toggle('a-slide-in');
  body.classList.toggle('is-fixed');
}

let open = false;

// show hide order modal, and trigger animation toggles
function orderFormToggle() {
  if (!open) {
    order.classList.remove('is-hidden');
    orderAnimToggle();
  } else {
    orderAnimToggle();
    setTimeout(() => {
      order.classList.add('is-hidden');
    }, 300)
  }
  open = !open;
}

// click event for any order button click
orderBtn.forEach(el => {
  el.addEventListener('click', orderFormToggle);
});

// close model on outside click
order.addEventListener('click', (e) => {
  if (e.target.id === 'order' && open) orderFormToggle();
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

