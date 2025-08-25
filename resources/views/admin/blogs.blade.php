@include('components.admin-header')
@include('components.aside')
<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>Blogs</h2>
          </div>
        </div>
        <!-- end col -->
        <div class="col-md-6">
          <div class="breadcrumb-wrapper">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#0">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blogs
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <div class="tables-wrapper">
      @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
            <div class="row mb-3 align-items-center">
              <div class="col-md-6">
                <h6 class="mb-0">Recent Blogs</h6>
              </div>
              <div class="col-md-6 text-end">
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                    <i class="lni lni-plus"></i> Add Blog
                </a>
              </div>
            </div>

            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="lead-info"><h6>Title</h6></th>
                    <th class="lead-email"><h6>Content</h6></th>
                    <th><h6>Action</h6></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($blogs as $blog)
                    <tr>
                      <td>
                        <div class="lead">
                          <div class="lead-image">
                            <img src="{{ $blog->cover_image }}" alt="{{ $blog->title }}" width="60" height="60" class="rounded">
                          </div>
                          <div class="lead-text">
                            <p>{{ $blog->title }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p>{{ Str::limit(strip_tags($blog->content), 50) }}</p>
                      </td>
                      <td>
                        <div class="action d-flex gap-2">
                          <!-- Edit -->
                          <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-warning">
                              <i class="lni lni-pencil-alt"></i>
                          </a>

                          <!-- Delete -->
                          <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" 
                                onsubmit="return confirm('Are you sure you want to delete this blog?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-link text-danger p-0 m-0">
                                  <i class="lni lni-trash-can"></i>
                              </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="text-center">No blogs found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
              <!-- end table -->
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

@include('components.admin-footer')
</body>
</html>
