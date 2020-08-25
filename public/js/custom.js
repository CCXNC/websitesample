// Animate Scroll
document.addEventListener('scroll', function(e) {
    var top = window.pageYOffset + window.innerHeight;
    var isVisible = top > document.getElementById('sectionAnimate1').offsetTop;

    if(isVisible) {
        document.getElementById('sectionAnimate1').classList.add('animation-1');
        document.getElementById('sectionAnimate2').classList.add('animation-2');
        document.getElementById('sectionAnimate3').classList.add('animation-2');
    }
})

// Google Maps API
function initMap(lat, lng) {
    var position = { lat: lat, lng: lng }

    var map = new google.maps.Map(document.getElementById('map'), {
        center: position,
        zoom: 16
    });

    var marker = new google.maps.Marker({
        position: position,
        map: map
    });
}

initMap(14.6072565, 121.0273014);
