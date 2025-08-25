    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
    
    <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dldkoa0wg/image/upload/v1755250933/african-children-enjoying-life_d9ylbf.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Services</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Services</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
  <div class="container">
    <div class="row">
      
      <!-- Career Development Seminars -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252855/DSC_2734_1_ulndm8.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">Career Development Seminars</a></h3>
            <p>We offer career development seminars to equip individuals with essential skills and guidance for successful professional paths.</p>
          </div>
        </div>
      </div>

      <!-- Skill Acquisition -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252849/DSC_2656_1_gibryf.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">Skill Acquisition</a></h3>
            <p>Our skill acquisition programs provide practical training, enabling individuals to gain marketable skills for economic empowerment.</p>
          </div>
        </div>
      </div>

      <!-- Travels & Tours -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252894/DSC_1744_kfhbki.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">Travels & Tours</a></h3>
            <p>We organize educational travels and tours to expose participants to diverse cultures and new learning environments.</p>
          </div>
        </div>
      </div>

      <!-- SDG's Events -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252850/DSC_2002_gcukig.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">SDG's Events</a></h3>
            <p>Our SDG's events promote awareness and action towards achieving the Sustainable Development Goals globally.</p>
          </div>
        </div>
      </div>

      <!-- International Conferences -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755253007/gallery7_ghwk9f.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">International Conferences</a></h3>
            <p>We organize international conferences to foster knowledge exchange and collaboration on global issues and sustainable development goals.</p>
          </div>
        </div>
      </div>

      <!-- Self Esteem Programmes -->
      <div class="col-md-4 ftco-animate">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755252857/DSC_1992_v3nipf.jpg);"></a>
          <div class="text p-3 p-md-4">
            <h3><a href="#">Self Esteem Programmes</a></h3>
            <p>Our self-esteem programs empower individuals through workshops and activities, building confidence and self-worth for personal growth.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
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
