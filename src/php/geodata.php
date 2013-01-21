<script>
var initialLocation = new Array();
var map;      
var mapOptions = {
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var lat = null;
var lng = null;

//Check whether the browser supports GeoLocation API or not

if(!navigator.geolocation) {
    $('#content').text("Your Browser doesn't support Ajax");
} else {
    //Ask the user permission to get his location details
    navigator.geolocation.getCurrentPosition(success,error);
}

//If the user accept to share his location

function success(position) {
    lat = position.coords.latitude;    //Get the Latitude and Longitude of the user
    lng = position.coords.longitude;
    console.log(''+lat+lng);
    var mapOptions = {
        center: new google.maps.LatLng(57.9, 14.6),
        zoom: 2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var infoWindow = new google.maps.InfoWindow();
    map = new google.maps.Map(document.getElementById("content"), mapOptions);
    $.getJSON("db.php?name=<?php echo $name;?>&groupid=<?php echo $groupid;?>&lat="+lat+"&lng="+lng, function(data) {
        var i=1;
        //Locate all the users from the database

        $.each(data, function(index,row){
                if(row.latitude!=1000){
                    $('#list').append(i+"."+row.name+"<br/ >");
                    console.log(row.name);
                    latLng = new google.maps.LatLng(row.latitude, row.longitude);  
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        title: row.name
                    });
                    //Provide Tooltip when we click on the marker

                    google.maps.event.addListener(marker, "click", function(e) {
                            infoWindow.setContent(row.name+"<br / >"+row.latitude+"<br / >"+row.longitude);
                            infoWindow.open(map, marker);
                    });
                    i = i+1;
                }
            });
    });
}

//If the user denies to share his location

function error(error){
}

//Delete the user details from database when user move out of from our webapp

/*$(window).bind("beforeunload", function() {
    alert("do you want to leave this page");
    $.ajax({
        url:'db.php?name=<?php echo $name;?>',
        type : 'GET',
        async : false,
    });    
});*/
</script>
