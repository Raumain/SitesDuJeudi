<head>
    <link href="../../styles/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<div id="redirection-pasfeur">
    <img src="../../assets/chien.png" width="500" alt="feur" />
    <h1>Le chien est triste</h1>
    <h2>Il veut un feur</h2>
    <h3>Tu aurais du lui donner un feur</h3>
    <div>
        <p>Ton IP : <?php echo $_SERVER['REMOTE_ADDR'] ?></p>
        <p>Ton Adress : 3 rue des cramptés, 59300 - Apagnanville</p>
        <p>Ta localisation actuelle : </p>
    </div>
    <div id="map"></div>
    <form action="../../index.php" method="post">
        <input type="submit" value="Retourner à l'accueil">
    </form>
</div>
<script>
    var map = L.map('map').setView([44.8518203, -0.5705145], 20);
    var marker = L.marker([44.8518203, -0.5705145]).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>