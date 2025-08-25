    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
        
    <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dldkoa0wg/image/upload/v1755250933/african-children-enjoying-life_d9ylbf.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Events</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Events</h1>
          </div>
        </div>
      </div>
    </div>
  
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        @foreach($events as $event)
          <div class="col-md-4 d-flex ftco-animate mb-4">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('user.events.show', $event->id) }}" class="block-20" 
                 style="background-image: url('{{ $event->cover_image }}');">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading mb-4">
                  <a href="{{ route('user.events.show', $event->id) }}">{{ $event->title }}</a>
                </h3>
                <p class="time-loc">
                  <span class="mr-2">
                    <i class="icon-clock-o"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('h:i A') }}
                  </span>
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

      <!-- Pagination -->
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            {{ $events->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </div>
    </div>
  </section>

 @include('components.footer')
