<x-layout>
    
    <div class="container mt-4">
        <form action="/applications" class="d-flex justify-center" role="search">
            <input class="form-control me-2 w-25" type="search" name="search" placeholder="Search for student" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <h1 class="mb-4 ">Students List</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Passport</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Address</th>
                        <th>Primary Phone</th>
                        <th>Alternate Phone</th>
                        <th>Email</th>
                        <th>NIN</th>
                        <th>Birth Date</th>
                        <th>Marital Status</th>
                        <th>Emergency Contact Name</th>
                        <th>Emergency Contact Address</th>
                        <th>Emergency Contact Primary Phone</th>
                        <th>Emergency Contact Alternate Phone</th>
                        <th>Relationship</th>
                        <th>Package</th>

                        <th>Duration</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Certificate in View</th>
                        <th>Requirement</th>

                        <!-- Official use -->
                        <th>Student ID</th>
                        <th>Supervisor</th>
                        <th>Terminal Date</th>
                        <th>Designation</th>
                        <th>CEO Remarks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($applications as $application)
                        {{-- <p>{{ asset('storage/' . $application->passport) }}</p> --}}

                        <tr>
                            <td>{{ $application->id }}</td>

                            <td><a href="applications/{{ $application->id }}"><img
                                        class="img-thumbnail img-responsive img-rounded"
                                        src="{{ $application->passport ? asset('storage/' . $application->passport) : asset('images/defaultdp.jpeg') }}"
                                        alt="passport thumbnail."></a></td>

                            <td>{{ $application->first_name }}</td>
                            <td>{{ $application->last_name }}</td>
                            <td>{{ $application->middle_name }}</td>
                            <td>{{ $application->address }}</td>
                            <td>{{ $application->primary_phone }}</td>
                            <td>{{ $application->alternate_phone }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->nin }}</td>
                            <td>{{ $application->birth_date }}</td>
                            <td>{{ $application->marital_status }}</td>
                            <td>{{ $application->emergency_contact_name }}</td>
                            <td>{{ $application->emergency_contact_address }}</td>
                            <td>{{ $application->emergency_contact_primary_phone }}</td>
                            <td>{{ $application->emergency_contact_alternate_phone }}</td>
                            <td>{{ $application->relationship }}</td>
                            <td>{{ $application->package }}</td>

                            <td>{{ $application->duration }}</td>
                            <td>{{ $application->start_date }}</td>
                            <td>{{ $application->end_date }}</td>
                            <td>{{ $application->certificate_in_view }}</td>
                            <td>{{ $application->requirement }}</td>

                            <!-- Official use -->
                            <td>{{ $application->student_id }}</td>
                            <td>{{ $application->supervisor }}</td>
                            <td>{{ $application->terminal_date }}</td>
                            <td>{{ $application->designation }}</td>
                            <td>{{ $application->ceo_remarks }}</td>
                            <td>
                                <a href="{{ route('applications.show', $application->id) }}"
                                    class="btn btn-primary btn-sm me-2">view</a>
                                <form action="{{ route('applications.destroy', $application->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        onclick="return confirm('Are you sure you want to delete this application?')"
                                        class="btn btn-danger btn-sm me-2">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination links -->
        {{-- <div class="d-flex justify-content-center h-25">
            {{ $applications->links() }}
        </div> --}}
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li> {{ $applications->links() }}</li>
            </ul>
        </nav>

    </div>
</x-layout>
