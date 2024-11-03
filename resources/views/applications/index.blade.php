<x-layout>
    <div class="container mt-4">
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
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td><img class="img-thumbnail img-responsive rounded-circle"
                                src="{{ $application->passport ? asset('storage/' . $application->passport) : asset('images/defaultdp.jpeg') }}"
                                alt=""></td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $applications->links() }}
        </div>
    </div>
</x-layout>
