    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
    
    
    <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dldkoa0wg/image/upload/v1755250933/african-children-enjoying-life_d9ylbf.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    
<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-4">
        <p><span>Address:</span> <span style="color: #f3035c;">House 8, Road 6, Wealthy Place Avenue, Redemption Camp, Ogun State, Nigeria</span></p>
      </div>
      <div class="col-md-4">
        <p><span>Phone:</span> <a href="tel:+2348069366384" > <span style="color: #f3035c;">+234 806 936 6384</span></a></p>
      </div>
      <div class="col-md-4">
        <p><span>Email:</span> <a href="mailto:info@inbafoundation.com"><span style="color: #f3035c;">info@inbafoundation.com</span></a></p>
      </div>
    </div>

    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <h4 class="mb-4">We’d Love to Hear From You</h4>
        <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="" cols="30" rows="7" class="form-control" placeholder="Your Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="background: #f3035c;">
          </div>
        </form>
      </div>

      <div class="col-md-6" id="map"></div>
    </div>
  </div>
</section>

<script>
function init() {
    var myLatlng = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
    
    var mapOptions = {
        zoom: 7,
        center: myLatlng,
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    { "visibility": "simplified" },
                    { "hue": "#ff0000" }
                ]
            }
        ]
    };

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    
    var addresses = ['New York'];

    for (var x = 0; x < addresses.length; x++) {
        $.getJSON(`https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(addresses[x])}&key=YOUR_API_KEY`, function (data) {
            if (data.status === "OK") {
                var p = data.results[0].geometry.location;
                var latlng = new google.maps.LatLng(p.lat, p.lng);
                new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: 'images/loc.png'
                });
            }
        });
    }
}
</script>

<!-- Load Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=init" async defer></script>

 @include('components.footer')
