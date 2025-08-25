<!-- START Header-nav -->
@include('components.nav')
<!-- END header-nav -->

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      {{-- Main Content: Blog --}}
      <div class="col-md-8 ftco-animate">
        <h2 class="mb-3">{{ $blog->title }}</h2>

        <p class="text-muted mb-2">
          <span class="mr-3"><i class="icon-calendar"></i>
            {{ $blog->created_at->format('F j, Y') }}
          </span>
          <span><i class="icon-user"></i> Admin</span>
        </p>

        <p>
          <img src="{{ $blog->cover_image }}" alt="Blog Cover" class="img-fluid rounded">
        </p>

        <div class="mb-4">
          {!! $blog->content !!}
        </div>
      </div>

      {{-- Sidebar --}}
      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="{{ url('/blogs') }}" method="GET" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" name="search" class="form-control" placeholder="Search blogs...">
            </div>
          </form>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blogs</h3>
          @foreach($recentBlogs as $recent)
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" 
                 style="background-image: url('{{ $recent->cover_image }}');">
              </a>
              <div class="text">
                <h3 class="heading"><a href="{{ route('user.blogs.show', $recent->id) }}">{{ $recent->title }}</a></h3>
                <div class="meta">
                  <div>
                    <a href="#"><span class="icon-calendar"></span> {{ $recent->created_at->format('M j, Y') }}</a>
                  </div>
                  <div>
                    <a href="#"><span class="icon-user"></span> Admin</a>
                  </div>
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
