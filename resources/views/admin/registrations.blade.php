@include('components.admin-header')
@include('components.aside')

<section class="section">
    <div class="container-fluid">
        <!-- Title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Registrations for: {{ $event->title }}</h2>
                        <p class="text-muted">Event Date: {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ url('admin/events') }}" class="btn btn-secondary">
                        <i class="lni lni-arrow-left"></i> Back to Events
                    </a>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-3">Registered People</h6>
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><h6>Name</h6></th>
                                        <th><h6>Email</h6></th>
                                        <th><h6>Phone</h6></th>
                                        <th><h6>Registered At</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($event->registrations as $registration)
                                        <tr>
                                            <td><p>{{ $registration->name }}</p></td>
                                            <td><p>{{ $registration->email }}</p></td>
                                            <td><p>{{ $registration->phone }}</p></td>
                                            <td><p>{{ $registration->created_at->format('M d, Y h:i A') }}</p></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No registrations yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- table-wrapper -->
                    </div> <!-- card -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.admin-footer')
