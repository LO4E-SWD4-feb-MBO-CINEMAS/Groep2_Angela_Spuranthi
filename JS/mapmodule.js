export function initmap(id, coords) {
  const map = L.map(id).setView(coords, 14);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
  }).addTo(map);
  L.marker(coords).addTo(map);
}





