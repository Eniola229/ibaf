    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          {{-- Main Content: Event --}}
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{ $event->title }}</h2>

            <p class="text-muted mb-2">
              <span class="mr-3"><i class="icon-calendar"></i>
                {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
              </span>
              @if($event->location)
                <span><i class="icon-map-marker"></i> {{ $event->location }}</span>
              @endif
            </p>

            @php
              $cover = $event->cover_image ?: asset('images/default-event.jpg');
            @endphp

            <p>
              <img src="{{ $cover }}" alt="Event Cover" class="img-fluid rounded">
            </p>

            <div class="mb-4">
              {!! $event->description !!}
            </div>

            {{-- Registration Form --}}
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Register for this Event</h3>
              @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              @php $isPast = \Carbon\Carbon::parse($event->event_date)->isPast(); @endphp

              @if($isPast)
                <div class="alert alert-danger">Registration closed. This event has already taken place.</div>
              @else
                <form method="POST" action="{{ route('events.register', $event->id) }}" class="p-5 bg-light">
                  @csrf
                  <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>

                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>

                  <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                  </div>

                  <div class="form-group">
                    <input type="submit" value="Register Now" class="btn py-3 px-4 btn-primary" style="background: #f7025f;"> 
                  </div>
                </form>
              @endif
            </div>
          </div>

          {{-- Sidebar --}}
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="{{ url('/events') }}" method="GET" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" name="search" class="form-control" placeholder="Search events...">
                </div>
              </form>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Upcoming Events</h3>
              @foreach($upcomingEvents as $up)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url('{{ $up->cover_image  }}');"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{ route('events.show', $up->id) }}">{{ $up->title }}</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($up->event_date)->format('M j, Y') }}</a></div>
                      <div><a href="#"><span class="icon-map-marker"></span> {{ $up->location }}</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


 @include('components.footer')
