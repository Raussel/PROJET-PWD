// =============================================
// localisation.js — Food Reserve
// Chemin : public/js/localisation.js
// =============================================

// ── CARTE LEAFLET ──
const map = L.map('map', {
    zoomControl: true,
    scrollWheelZoom: true
}).setView([5.4475, 10.0530], 14);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://openstreetmap.org">OpenStreetMap</a>',
    maxZoom: 19
}).addTo(map);

const markersGroup = L.layerGroup().addTo(map);

// ── ICÔNES CUSTOM ──
const iconRestaurant = L.divIcon({
    className: '',
    html: '<div style="background:#a0522d;color:#fff;width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1rem;border:3px solid #d4af37;box-shadow:0 2px 8px rgba(0,0,0,0.3);">🍽️</div>',
    iconSize: [34, 34], iconAnchor: [17, 17], popupAnchor: [0, -20]
});

const iconUser = L.divIcon({
    className: '',
    html: '<div style="background:#3498db;color:#fff;width:38px;height:38px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.1rem;border:3px solid #fff;box-shadow:0 2px 12px rgba(52,152,219,0.5);">📍</div>',
    iconSize: [38, 38], iconAnchor: [19, 19], popupAnchor: [0, -22]
});

const iconNearest = L.divIcon({
    className: '',
    html: '<div style="background:#d4af37;color:#fff;width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;border:3px solid #fff;box-shadow:0 2px 14px rgba(212,175,55,0.6);">⭐</div>',
    iconSize: [42, 42], iconAnchor: [21, 21], popupAnchor: [0, -24]
});

// ── RESTAURANTS DE DSCHANG ──
const restaurants = [
    { name: "Complexe Zanzibar",           lat: 5.4461798, lng: 10.0585890 },
    { name: "Greenlife Foto",               lat: 5.4615190, lng: 10.0743171 },
    { name: "Greenlife Maazi",              lat: 5.4461778, lng: 10.0584831 },
    { name: "Tamana Glacier",               lat: 5.4478579, lng: 10.0625105 },
    { name: "Le Combattant Lillois",        lat: 5.4464367, lng: 10.0568431 },
    { name: "Le Sims (Ancienne CNPS)",      lat: 5.4452140, lng: 10.0578630 },
    { name: "Restaurant Fosso",             lat: 5.4502670, lng: 10.0647390 },
    { name: "Le Gourmet",                   lat: 5.4544545, lng: 10.0623738 },
    { name: "Djimiquick",                   lat: 5.4476202, lng: 10.0585716 },
    { name: "Palais des Étoiles de Mbouoh", lat: 5.4442692, lng: 10.0551295 },
    { name: "Platinium Lounge",             lat: 5.4456796, lng: 10.0549046 },
    { name: "Mange Lapin",                  lat: 5.4459,    lng: 10.0471    }
];

const CENTER     = { lat: 5.4475, lng: 10.0530 };
const RADIUS_KM  = 50;

// ── GPS OPTIONS ──
const gpsOptions = { enableHighAccuracy: true, timeout: 15000, maximumAge: 0 };

// =============================================
// UTILITAIRES
// =============================================

function getDistance(a, b) {
    const R    = 6371;
    const dLat = (b.lat - a.lat) * Math.PI / 180;
    const dLng = (b.lng - a.lng) * Math.PI / 180;
    const x    =
        Math.sin(dLat / 2) ** 2 +
        Math.cos(a.lat * Math.PI / 180) *
        Math.cos(b.lat * Math.PI / 180) *
        Math.sin(dLng / 2) ** 2;
    return 2 * R * Math.atan2(Math.sqrt(x), Math.sqrt(1 - x));
}

function isValid(lat, lng) {
    return getDistance({ lat, lng }, CENTER) <= RADIUS_KM;
}

function clearMap() {
    markersGroup.clearLayers();
}

function hideOverlay() {
    document.getElementById('mapOverlay').classList.add('hidden');
}

function setStatus(msg, type = 'info') {
    const el    = document.getElementById('result');
    const icons = {
        info:    'fa-info-circle',
        success: 'fa-check-circle',
        error:   'fa-exclamation-triangle',
        loading: 'fa-spinner fa-spin'
    };
    el.className = 'loc-result ' + (type !== 'info' ? type : '');
    el.innerHTML = `<i class="fas ${icons[type]}"></i><span>${msg}</span>`;
}

function buildList(sorted, nearestName) {
    const ul = document.getElementById('listItems');
    ul.innerHTML = '';
    sorted.forEach(r => {
        const li = document.createElement('li');
        if (r.name === nearestName) li.classList.add('nearest');
        li.innerHTML = `
            <span class="li-name">
                <i class="fas fa-utensils" style="color:var(--primary-color, #a0522d)"></i>
                ${r.name}
            </span>
            ${r.dist !== undefined ? `<span class="li-dist">${r.dist.toFixed(2)} km</span>` : ''}
        `;
        li.addEventListener('click', () => {
            map.setView([r.lat, r.lng], 17);
            markersGroup.eachLayer(layer => {
                if (layer.getLatLng &&
                    layer.getLatLng().lat.toFixed(4) === r.lat.toFixed(4)) {
                    layer.openPopup();
                }
            });
        });
        ul.appendChild(li);
    });
}

// =============================================
// GÉOLOCALISATION FIABLE (3 tentatives)
// =============================================
function obtenirPosition(onSuccess, onFallback) {
    let tentatives = 0;
    const MAX = 3;
    setStatus(`⏳ Recherche GPS… (tentative 1/${MAX})`, 'loading');

    function essayer() {
        navigator.geolocation.getCurrentPosition(
            pos => {
                const { latitude: lat, longitude: lng, accuracy } = pos.coords;
                if (isValid(lat, lng)) {
                    onSuccess(lat, lng, accuracy);
                } else {
                    tentatives++;
                    if (tentatives < MAX) {
                        setStatus(`Position imprécise, nouvel essai… (${tentatives + 1}/${MAX})`, 'loading');
                        setTimeout(essayer, 2000);
                    } else {
                        onFallback("GPS retourne une position hors de Dschang.");
                    }
                }
            },
            () => onFallback("GPS refusé ou indisponible."),
            gpsOptions
        );
    }
    essayer();
}

function fallback(fn, raison) {
    setStatus(`⚠️ ${raison} Position fixée au centre de Dschang.`, 'error');
    fn(CENTER.lat, CENTER.lng, null);
}

// =============================================
// ACTIONS
// =============================================

// ── PLUS PROCHE ──
function findNearest() {
    hideOverlay();
    obtenirPosition(
        (lat, lng, acc) => _findNearest(lat, lng, acc),
        raison => fallback(_findNearest, raison)
    );
}

function _findNearest(uLat, uLng, accuracy) {
    clearMap();

    L.marker([uLat, uLng], { icon: iconUser })
        .bindPopup(`📍 Vous êtes ici${accuracy ? ` (~${Math.round(accuracy)}m)` : ''}`)
        .addTo(map)
        .openPopup();

    const sorted = restaurants
        .map(r => ({ ...r, dist: getDistance({ lat: uLat, lng: uLng }, r) }))
        .sort((a, b) => a.dist - b.dist);

    const nearest = sorted[0];

    sorted.forEach((r, i) => {
        const icon = i === 0 ? iconNearest : iconRestaurant;
        const m = L.marker([r.lat, r.lng], { icon })
            .bindPopup(`${i === 0 ? '⭐ PLUS PROCHE : ' : '🍽️ '}<b>${r.name}</b><br>${r.dist.toFixed(2)} km`);
        markersGroup.addLayer(m);
        if (i === 0) m.openPopup();
    });

    // Ligne vers le plus proche
    L.polyline([[uLat, uLng], [nearest.lat, nearest.lng]], {
        color: '#d4af37', weight: 3, dashArray: '8 6', opacity: 0.85
    }).addTo(markersGroup);

    map.setView([nearest.lat, nearest.lng], 16);
    setStatus(`⭐ Plus proche : <b>${nearest.name}</b> — ${nearest.dist.toFixed(2)} km`, 'success');
    buildList(sorted, nearest.name);
}

// ── MA POSITION ──
function showPosition() {
    hideOverlay();
    obtenirPosition(
        (lat, lng, acc) => _showPosition(lat, lng, acc),
        raison => fallback(_showPosition, raison)
    );
}

function _showPosition(uLat, uLng, accuracy) {
    clearMap();
    L.marker([uLat, uLng], { icon: iconUser })
        .bindPopup(`📍 Vous êtes ici${accuracy ? ` (~${Math.round(accuracy)}m)` : ''}`)
        .addTo(map)
        .openPopup();
    map.setView([uLat, uLng], 17);
    setStatus(`📍 Position affichée${accuracy ? ` (précision ~${Math.round(accuracy)}m)` : ''}`, 'success');

    const sorted = restaurants
        .map(r => ({ ...r, dist: getDistance({ lat: uLat, lng: uLng }, r) }))
        .sort((a, b) => a.dist - b.dist);
    buildList(sorted, null);
}

// ── TOUS LES RESTAURANTS ──
function showAll() {
    clearMap();
    hideOverlay();

    restaurants.forEach(r => {
        const m = L.marker([r.lat, r.lng], { icon: iconRestaurant })
            .bindPopup(`🍽️ <b>${r.name}</b>`);
        markersGroup.addLayer(m);
    });

    map.setView([CENTER.lat, CENTER.lng], 14);
    setStatus(`🍽️ ${restaurants.length} restaurants affichés à Dschang`, 'success');

    const sorted = [...restaurants].sort((a, b) => a.name.localeCompare(b.name));
    buildList(sorted, null);
}

// ── RÉINITIALISER ──
function resetMap() {
    clearMap();
    map.setView([CENTER.lat, CENTER.lng], 14);
    document.getElementById('mapOverlay').classList.remove('hidden');
    document.getElementById('listItems').innerHTML = '';
    setStatus('Cliquez sur un bouton pour commencer', 'info');
}

// ── INIT ──
document.addEventListener('DOMContentLoaded', () => {
    const sorted = [...restaurants].sort((a, b) => a.name.localeCompare(b.name));
    buildList(sorted, null);
});