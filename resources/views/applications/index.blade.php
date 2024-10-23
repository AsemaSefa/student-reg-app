@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Students List</h1>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
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
                <th>Passport</th>
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
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->middle_name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->primary_phone }}</td>
                    <td>{{ $student->alternate_phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->nin }}</td>
                    <td>{{ $student->birth_date }}</td>
                    <td>{{ $student->marital_status }}</td>
                    <td>{{ $student->emergency_contact_name }}</td>
                    <td>{{ $student->emergency_contact_address }}</td>
                    <td>{{ $student->emergency_contact_primary_phone }}</td>
                    <td>{{ $student->emergency_contact_alternate_phone }}</td>
                    <td>{{ $student->relationship }}</td>
                    <td>{{ $student->package }}</td>
                    <td>{{ $student->passport }}</td>
                    <td>{{ $student->duration }}</td>
                    <td>{{ $student->start_date }}</td>
                    <td>{{ $student->end_date }}</td>
                    <td>{{ $student->certificate_in_view }}</td>
                    <td>{{ $student->requirement }}</td>

                    <!-- Official use -->
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->supervisor }}</td>
                    <td>{{ $student->terminal_date }}</td>
                    <td>{{ $student->designation }}</td>
                    <td>{{ $student->ceo_remarks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination links -->
    <div class="d-flex justify-content-center">
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
