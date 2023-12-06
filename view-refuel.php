<h3>Route Refueling Calculator</h3>

    <label for="selectRoute">Select Route:</label>
    <select id="selectRoute">
        <option value="20">Route 13 (20 miles)</option>
        <option value="17">Route 14 (17 miles)</option>
        <option value="33">Route 15 (33 miles)</option>
        <option value="27">Route 16 (13 miles)</option>
        <option value="13">Route 17 (27 miles)</option>
    </select>

    <br>

    <button onclick="calculateRoutesBeforeRefuel()">Calculate Routes Before Refuel</button>

    <p id="results"></p>

    <script>
        function calculateRoutesBeforeRefuel() {
            const selectRoute = document.getElementById('selectRoute');
            const selectedRouteMiles = parseInt(selectRoute.value);

            const milesPerTank = 300;

            const routesBeforeRefuel = Math.floor(milesPerTank / selectedRouteMiles);

            const resultsParagraph = document.getElementById('results');
            resultsParagraph.textContent = `Number of routes before needing to refuel: ${routesBeforeRefuel}`;
        }
    </script>

<br></br>

<div id="map"></div>
<h3>Map of Routes</h3>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        const map = L.map('map').setView([35.2226, -97.4395], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        const busRoute = [
            [35.2226, -97.4395, "Start Location - Norman, OK"],
            [35.3395, -97.4867, "Moore, OK"],
            [35.4676, -97.5164, "Oklahoma City, OK"],
                                    [35.6528, -97.4781, "Edmund, OK"],
            [35.2226, -97.4395, "End Location - Norman, OK"]
        ];

        L.polyline(busRoute, { color: 'blue' }).addTo(map);
    </script>
