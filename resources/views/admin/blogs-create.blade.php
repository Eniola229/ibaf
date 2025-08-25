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
                  Add Blog
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>

    <!-- ========== Create Blog Form start ========== -->
    <div class="form-elements-wrapper">
      <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <!-- Left Column -->
          <div class="col-lg-6">
            <div class="card-style mb-30">
              <h6 class="mb-25">Blog Information</h6>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> Please fix the following errors:
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

              <!-- Title -->
              <div class="input-style-1">
                <label>Blog Title <span class="text-danger">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter blog title" required />
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
            </div>
          </div>

          <!-- Right Column -->
          <div class="col-lg-6">
            <!-- Description -->
            <div class="card-style mb-30">
              <h6 class="mb-25">Blog Content</h6>
              <div class="input-style-1">
                <label>Content <span class="text-danger">*</span></label>
                <textarea id="description" name="content" rows="6" placeholder="Enter blog content...">{{ old('content') }}</textarea>
                @error('content') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
            </div>
          </div>

          <!-- Cover Image -->
          <div class="card-style mb-30">
            <h6 class="mb-25">Cover Image</h6>
            <div class="input-style-1">
              <input type="file" name="cover_image" accept="image/*" />
              <small class="text-muted">Optional. JPG, JPEG, PNG only. Max 2MB.</small>
              @error('cover_image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="row">
          <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary">
              <i class="lni lni-plus"></i> Create Blog
            </button>
          </div>
        </div>
      </form>
    </div>
    <!-- ========== Create Blog Form end ========== -->

    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        ClassicEditor
          .create(document.querySelector('#description'))
          .catch(error => {
            console.error(error);
          });
      });
    </script>

@include('components.admin-footer')
</body>
</html>
