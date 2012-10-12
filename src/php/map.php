<!DOCTYPE html>
<html>
  <?php
    $name = $_GET['name']
  ?>
  <head>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script>
      
      var initialLocation = new Array();
      var map;

      
      var infowindow = new Array();
      for (var i = 0; i < 9; i++) {
            infowindow[i] = new google.maps.InfoWindow();     
      };
      var mapOptions = {
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

        var lat = null;
        var lng = null;
        if(!navigator.geolocation)
        {
            document.writeln("Your Browser doesn't support Ajax");
        }
        else
        {
            navigator.geolocation.getCurrentPosition(success,error);
        }
        function success(position)
        {
            lat = position.coords.latitude;
            lng = position.coords.longitude;
            var mapOptions = {
                center: new google.maps.LatLng(57.9, 14.6),
                zoom: 2,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById("content"), mapOptions);
            $.getJSON("db.php?name=<?php echo $name;?>&lat="+lat+"&lng="+lng, function(data) {
                var i=1;
                $.each(data, function(index,row){
                    $('#list').append(row['name'] + i+"<br/ >");
                    latLng = new google.maps.LatLng(row['latitude'], row['longitude']);  
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        title: row['name']
                    });
                    google.maps.event.addListener(marker, "click", function(e) {
                        infoWindow.setContent(row['name']+"<br / >"+row['latitude']+"<br / >"+row['longitude']);
                        infoWindow.open(map, marker);
                    });

                    i = i+1; 
                });
            });
        }
        function error(error)
        {}
        
        $(window).bind("beforeunload", function() {
            alert("do you want to leave this page");
            $.ajax({
            url:'db.php?name=<?php echo $name;?>',
            type : 'GET',
            async : false,
            });    
        });
    </script>
  </head>
  <body style="font: 75% Lucida Grande, Trebuchet MS;margin:0">
    <div id="content" style="height: 450px"></div>
    <div id="list"></div>
  </body>
</html>
