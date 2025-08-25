    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
    
        <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dldkoa0wg/image/upload/v1755250933/african-children-enjoying-life_d9ylbf.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    
   <section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      @foreach($blogs as $blog)
      <a href="{{ route('user.blogs.show', $blog->id) }}">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="{{ route('user.blogs.show', $blog->id) }}" class="block-20" 
               style="background-image: url('{{ $blog->cover_image }}');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">{{ $blog->created_at->format('M d, Y') }}</a></div>
                <div><a href="#">Admin</a></div>
              </div>
              <h3 class="heading mt-3">
                <a href="{{ route('user.blogs.show', $blog->id) }}">{{ $blog->title }}</a>
              </h3>
              <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="row mt-5">
      <div class="col text-center">
        {{ $blogs->links() }}
      </div>
    </div>
  </div>
</section>

 @include('components.footer')
