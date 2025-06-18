export function initmaps(id, coords) {
  const map = L.map(id).setView(coords, 14);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
  }).addTo(map);
  L.marker(coords).addTo(map);
}


// // Exporteer de functie zodat andere bestanden deze kunnen gebruiken
// export function initmaps(id, coords) {
//   // Maak een Leaflet-kaart in het element met id
//   const map = L.map(id).setView(coords, 14);

//   // Voeg de OpenStreetMap tegel-laag toe
//   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     attribution: '© OpenStreetMap'
//   }).addTo(map);

//   // Plaats een marker op de kaart
//   L.marker(coords).addTo(map);
// }



