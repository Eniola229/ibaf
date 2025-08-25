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
                  <h2>Events</h2>
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
                       Add Events
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
    <!-- ========== Create Event Form start ========== -->
      <div class="form-elements-wrapper">
        <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6">
              <div class="card-style mb-30">
                <h6 class="mb-25">Event Information</h6>

                <!-- Title -->
                <div class="input-style-1">
                  <label>Event Title <span class="text-danger">*</span></label>
                  <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter event title" required />
                  @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Event Date -->
                <div class="input-style-1 mt-3">
                  <label>Event Date <span class="text-danger">*</span></label>
                  <input type="date" name="event_date" value="{{ old('event_date') }}" required />
                  @error('event_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Location -->
                <div class="input-style-1 mt-3">
                  <label>Location</label>
                  <input type="text" name="location" value="{{ old('location') }}" placeholder="Enter event location" />
                  @error('location') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>
            </div>
              <!-- Right Column -->
              <div class="col-lg-6">
                <!-- Description -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">Event Description</h6>
                  <div class="input-style-1">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea id="description" name="description" rows="6" placeholder="Enter event details...">{{ old('description') }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
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
          </div>

          <!-- Submit -->
          <div class="row">
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary">
                <i class="lni lni-plus"></i> Create Event
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- ========== Create Event Form end ========== -->
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
