<?php
use App\Models\Blog;

        $recentfooBlogs = Blog::orderBy('created_at', 'asc')->paginate(3); // 6 per page

?>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Empowering lives through education mentorship, and sustainable development. Join us in making a difference in communities across Africa.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Recent Blog</h2>
            
            @foreach($recentfooBlogs as $blog)
              <div class="block-21 mb-4 d-flex">
                <a href="{{ route('user.blogs.show', $blog->id) }}" class="blog-img mr-4" style="background-image: url('{{ $blog->cover_image }}');"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="{{ route('user.blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                  </h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ url('/about') }}" class="py-2 d-block">About</a></li>
                <li><a href="{{ url('/donate') }}" class="py-2 d-block">Donate</a></li>
                <li><a href="{{ url('/event') }}" class="py-2 d-block">Event</a></li>
                <li><a href="{{ url('/blog') }}" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">House 8, Road 6, Wealthy Place Avenue, Redemption Camp, Ogun State</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+234-806-936-6384</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@inbaf.org</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Built by <a href="" target="_blank">FRAGRANCE TECH HUB</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="ffaaff"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f7025f"/></svg></div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>