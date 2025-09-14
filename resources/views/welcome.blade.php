    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
<!-- Carousel Wrapper -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dww7q9k1e/image/upload/v1756239329/WhatsApp_Image_2025-08-26_at_9.54.20_AM_pkut2j.jpg'); height: 100vh; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="shadow-title mb-3">Join us today, changing the world begins with you.</h1>
              <p class="shadow-subtitle">Empowering communities through <strong>compassion, action, and hope</strong>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dww7q9k1e/image/upload/v1756239332/WhatsApp_Image_2025-08-26_at_9.52.55_AM_2_s5xtln.jpg'); height: 100vh; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="shadow-title mb-3">Together we can create lasting change.</h1>
              <p class="shadow-subtitle">Your support transforms lives every day.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dww7q9k1e/image/upload/v1756239310/WhatsApp_Image_2025-08-26_at_9.54.20_AM_1_ojarpj.jpg'); height: 100vh; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="shadow-title mb-3">Be a part of the movement today.</h1>
              <p class="shadow-subtitle">Inspiring hope through every action we take.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Styles -->
<style>
  .carousel-item {
    transition: transform 0.3s ease-in-out; /* Faster transition */
  }

  /* Separate shadow backgrounds */
  .shadow-title {
    background: rgba(0, 0, 0, 0.6);
    padding: 15px 25px;
    border-radius: 8px;
    color: #fff;
    display: inline-block;
  }

  .shadow-subtitle {
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 20px;
    border-radius: 6px;
    color: #fff;
    display: inline-block;
  }
</style>

<!-- Force 2-second auto-scroll -->
<script>
  const heroCarousel = document.querySelector('#heroCarousel');
  const carousel = new bootstrap.Carousel(heroCarousel, {
    interval: 4000,
    ride: 'carousel',
    pause: false // keeps scrolling even when hovered
  });
</script>


    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
           <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                <span>Served Over</span>
                <strong class="number" data-number="500">0</strong>
                <span>Children across Africa</span>
              </div>
            </div>
          </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 color-2 align-items-stretch">
                <div class="text">
                  <h3 style="color: white;" class="mb-4">Who We Are</h3>
                  <p style="color: white;">
                    We are a community of caring hearts, committed to bringing food, shelter, and hope to those in need.
                  </p>
                  <p><a href="{{ url('/about') }}" class="btn btn-white px-3 py-2 mt-2">About Us</a></p>
                </div>
              </div>
            </div>

            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 color-3 align-items-stretch">
                <div class="text">
                  <h3 class="mb-4">Our Mission</h3>
                  <p>
                    Every day, we work to restore dignity, uplift communities, and share compassion with the most vulnerable.
                  </p>
                  <p><a href="{{ url('/about') }}" class="btn btn-white px-3 py-2 mt-2">Read More</a></p>
                </div>
              </div>
            </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
               <div class="icon d-flex mb-3">
                    <i class="fa-solid fa-graduation-cap" style="color: #f6035f; font-size: 2rem;"></i>
                </div>
                <div class="media-body pl-4">
                    <h3 class="heading">Educational Support</h3>
                    <p>
                        We provide school supplies, and tuition assistance to children in need, 
                        helping them unlock a brighter future through learning.
                    </p>
                </div>
            </div>
                </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
                <div class="icon d-flex mb-3">
                    <i class="fas fa-heart" style="color: #f6035f; font-size: 2rem;"></i>
                </div>
                <div class="media-body pl-4">
                    <h3 class="heading">Self-Esteem Building</h3>
                    <p>
                        We inspire confidence and self-worth in individuals by offering mentorship, 
                        emotional support, and community engagement programs that help them believe in their potential.
                    </p>
                </div>
            </div>      
        </div>

        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
                <div class="icon d-flex mb-3">
                    <i class="fas fa-hands-helping" style="color: #f6035f; font-size: 2rem;"></i>
                </div>
                <div class="media-body pl-4">
                    <h3 class="heading">Training & Empowerment</h3>
                    <p>
                        Through vocational training and skill development workshops, 
                        we empower people to become self-reliant, achieve economic stability, 
                        and create opportunities for a brighter future.
                    </p>
                </div>
            </div>    
        </div>

        </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Empowering Communities Through Education and Support.</p>
          </div>
        </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">

                        <!-- Career Development Seminars -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252855/DSC_2734_1_ulndm8.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Career Development Seminars</a></h3>
                                    <p>We offer career development seminars to equip individuals with essential skills and guidance for successful professional paths.</p>
                                </span>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Acquisition -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252849/DSC_2656_1_gibryf.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Skill Acquisition</a></h3>
                                    <p>Our skill acquisition programs provide practical training, enabling individuals to gain marketable skills for economic empowerment.</p>
                               </span>
                                </div>
                            </div>
                        </div>

                        <!-- Travels & Tours -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1744_kfhbki.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Travels & Tours</a></h3>
                                    <p>We organize educational travels and tours to expose participants to diverse cultures and new learning environments.</p>
                                    
                                 </div>
                            </div>
                        </div>

                        <!-- SDG's Events -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252850/DSC_2002_gcukig.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">SDG's Events</a></h3>
                                    <p>Our SDG's events promote awareness and action towards achieving the Sustainable Development Goals globally.</p>
                                    
                                  </div>
                            </div>
                        </div>

                        <!-- International Conferences -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755253007/gallery7_ghwk9f.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">International Conferences</a></h3>
                                    <p>We organize international conferences to foster knowledge exchange and collaboration on global issues and sustainable development goals.</p>
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Self Esteem Programmes -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252857/DSC_1992_v3nipf.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Self Esteem Programmes</a></h3>
                                    <p>Our self-esteem programs empower individuals through workshops and activities, building confidence and self-worth for personal growth.</p>
                                  </div>
                        </div>
</div>
                        <!-- Student Leaders Conference -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252850/DSC_2002_gcukig.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Student Leaders Conference</a></h3>
                                    <p>We host student leader conferences to develop leadership skills and inspire future change-makers for positive societal impact.</p>
                                 </div>
                            </div>
                        </div>

                        <!-- Health & Hygiene Seminars -->
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252881/DSC_1733_tfyzou.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Health & Hygiene Seminars</a></h3>
                                    <p>Our health and hygiene seminars educate communities on vital practices, promoting well-being and disease prevention.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ftco-gallery">
        <div class="d-md-flex">
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1721_rsqsqe.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1721_rsqsqe.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252865/DSC_1829_xnehow.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252865/DSC_1829_xnehow.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252869/DSC_1778_kd4qau.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252869/DSC_1778_kd4qau.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
        <div class="d-md-flex">
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252846/DSC_1911_bk2yxq.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252846/DSC_1911_bk2yxq.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252837/DSC_2141_1_hhi4pe.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252837/DSC_2141_1_hhi4pe.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252831/DSC_2613_1_jnw0gs.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252831/DSC_2613_1_jnw0gs.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1744_kfhbki.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1744_kfhbki.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Latest from Our Blog</h2>
            <p>Discover inspiring stories, helpful tips, and updates from our journey as we work to make a difference in communities worldwide.</p>
            </div>
        </div>
        <div class="row d-flex">
        @foreach($blogs as $blog)
        <a href="{{ route('user.blogs.show', $blog->id) }}">
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <a href="{{ route('user.blogs.show', $blog->id) }}" 
                   class="block-20" 
                   style="background-image: url('{{ $blog->cover_image }}');">
                </a>
                <div class="text p-4 d-block">
                  <div class="meta mb-3">
                    <div><a href="#">{{ $blog->created_at->format('M d, Y') }}</a></div>
                    <div><a href="#">Admin</a></div>
                    {{-- Optional comments count, if you add comments later --}}
                    {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{ $blog->comments_count ?? 0 }}</a></div> --}}
                  </div>
                  <h3 class="heading mt-3">
                    <a href="{{ route('user.blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                  </h3>
                  <p>{{ Str::limit(strip_tags($blog->content), 120) }}</p>
                </div>
              </div>
            </div>
        </a>
          @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
        <div class="row">
          @foreach($events as $event)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <a href="#" class="block-20" 
                   style="background-image: url('{{ $event->cover_image }}');">
                </a>
                <div class="text p-4 d-block">
                  <div class="meta mb-3">
                    <div><a href="#">{{ \Carbon\Carbon::parse($event->event_date)->format('M. d, Y') }}</a></div>
                  </div>
                  <h3 class="heading mb-4"><a href="#">{{ $event->title }}</a></h3>
                  <p class="time-loc">
                    <span><i class="icon-map-o"></i> {{ $event->location }}</span>
                  </p>
                 <p>{{ Str::limit(strip_tags($event->description), 100) }}</p>
                 <p>
                    <a href="{{ route('user.events.show', $event->id) }}">Join Event 
                    <i class="ion-ios-arrow-forward"></i>
                  </a>
              
                 </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
        
        <section class="ftco-section-3 img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg);"></div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Join our team</h3>
                <form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
            </div>              
            </div>
        </div>
    </section>

 @include('components.footer')
