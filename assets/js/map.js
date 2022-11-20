let logo = document.querySelector('.js-accueil-content');
let maps = document.getElementById('map');
// let map: google.maps.Map;

if (maps) {
    mapboxgl.accessToken = 'pk.eyJ1IjoiZnJlZDc4NDkwIiwiYSI6ImNreG56aG1jMzBkaDgydm9lamJxNDV3dTQifQ.4r9qNSs7yFxgLG3mJCCbJQ';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [1.79444, 48.7961 ], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });
}