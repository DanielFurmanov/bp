<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
{{--<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->--}}
<link rel="stylesheet" href="css/main.css" />
{{--<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->--}}
{{--<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->--}}
<style>
    #map {
        height: 100%;
    }
</style>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxOih0MaWWizIOX2zxck6U4aCX2enAH1E&callback=initMap"
async defer></script>