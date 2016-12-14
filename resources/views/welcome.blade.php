<html>
<head>
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
    <script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type='text/javascript'>
        $(function(){
            var myOptions = {
                center: new google.maps.LatLng(-6.255669, 106.883721),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };
            gMap = new google.maps.Map(document.getElementById('map_canvas'), myOptions);

            var kmlLayer = new google.maps.KmlLayer('https://maps.google.com/maps/ms?ie=UTF8&t=m&authuser=0&msa=0&output=kml&msid=212043342089249462794.00048cfeb10fb9d85b995');
            kmlLayer.setMap(gMap);
        });
    </script>
</head>
<body>
    <div id="map_canvas" style="width: 100%; height: 100%;"></div>
</body>