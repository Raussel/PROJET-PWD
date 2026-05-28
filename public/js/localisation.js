// ===============================
// 🗺️ MAP INIT
// ===============================
const map = L.map('map').setView([5.4475, 10.0530], 14);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'OpenStreetMap'
}).addTo(map);

const markersGroup = L.layerGroup().addTo(map);

// ===============================
// 🍔 RESTAURANTS (DATA CLEAN)
// ===============================
const restaurants = [
    { name: "Complexe Zanzibar", lat: 5.4461798, lng: 10.0585890 },
    { name: "Greenlife Foto", lat: 5.4615190, lng: 10.0743171 },
    { name: "Greenlife Maazi", lat: 5.4461778, lng: 10.0584831 },
    { name: "Tamana Glacier", lat: 5.4478579, lng: 10.0625105 },
    { name: "Le Gourmet", lat: 5.4544545, lng: 10.0623738 },
    { name: "Djimiquick", lat: 5.4476202, lng: 10.0585716 },
    { name: "Mange Lapin", lat: 5.4459, lng: 10.0471 }
];

const CENTER = { lat: 5.4475, lng: 10.0530 };
const RADIUS_KM = 50;

// ===============================
// 📏 DISTANCE (HAVERSINE)
// ===============================
function getDistance(a, b) {
    const R = 6371;
    const dLat = (b.lat - a.lat) * Math.PI / 180;
    const dLng = (b.lng - a.lng) * Math.PI / 180;

    const x =
        Math.sin(dLat / 2) ** 2 +
        Math.cos(a.lat * Math.PI / 180) *
        Math.cos(b.lat * Math.PI / 180) *
        Math.sin(dLng / 2) ** 2;

    return 2 * R * Math.atan2(Math.sqrt(x), Math.sqrt(1 - x));
}

// ===============================
// 📍 VALIDATION POSITION
// ===============================
function isValid(lat, lng) {
    return getDistance({ lat, lng }, CENTER) <= RADIUS_KM;
}

// ===============================
// 📦 CLEAR MAP
// ===============================
function clearMap() {
    markersGroup.clearLayers();
}

// ===============================
// ⭐ PLUS PROCHE RESTAURANT
// ===============================
function findNearest() {
    navigator.geolocation.getCurrentPosition(
        pos => {
            const user = {
                lat: pos.coords.latitude,
                lng: pos.coords.longitude
            };

            if (!isValid(user.lat, user.lng)) {
                alert("Position hors zone Dschang");
                return;
            }

            clearMap();

            L.marker([user.lat, user.lng])
                .bindPopup("📍 Vous êtes ici")
                .addTo(map);

            let nearest = restaurants.reduce((prev, curr) => {
                const d = getDistance(user, curr);
                return d < prev.dist ? { ...curr, dist: d } : prev;
            }, { dist: Infinity });

            L.marker([nearest.lat, nearest.lng])
                .bindPopup(`⭐ ${nearest.name} (${nearest.dist.toFixed(2)} km)`)
                .addTo(map);

            map.setView([nearest.lat, nearest.lng], 16);
        }
    );
}

// ===============================
// 🍔 AFFICHER TOUS
// ===============================
function showAll() {
    clearMap();

    restaurants.forEach(r => {
        L.marker([r.lat, r.lng])
            .bindPopup("🍔 " + r.name)
            .addTo(map);
    });

    map.setView([CENTER.lat, CENTER.lng], 14);
}

// ===============================
// 📍 POSITION USER
// ===============================
function showPosition() {
    navigator.geolocation.getCurrentPosition(pos => {
        const user = { lat: pos.coords.latitude, lng: pos.coords.longitude };

        if (!isValid(user.lat, user.lng)) {
            alert("Position hors zone Dschang");
            return;
        }

        clearMap();

        L.marker([user.lat, user.lng])
            .bindPopup("📍 Vous êtes ici")
            .addTo(map);

        map.setView([user.lat, user.lng], 16);
    });
}