<x-layout>

    <!-- resources/views/application/show.blade.php -->

    <div class="container mt-5">
        <style>
            .id-card {
                width: 70%;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .id-card-header {
                text-align: center;
                font-weight: bold;
                font-size: 1.2em;
                margin-bottom: 10px;
            }

            .id-card img {
                display: block;
                margin: 0 auto 15px;
                border-radius: 50%;
                width: 150px;
                height: 150px;
                object-fit: cover;
            }

            .id-card-section {
                margin-bottom: 10px;
            }

            .id-card-section strong {
                display: block;
                font-size: 0.9em;
            }
        </style>
       <div class="row w-25">
         <a href="/applications/{{$application->id}}/edit" class="btn btn-primary col-6 btn-sm">edit</a>
          <form action="{{ route('applications.destroy', $application->id) }}" method="post" class="col-6">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        onclick="return confirm('Are you sure you want to delete this application?')"
                                        class="btn btn-danger btn-sm me-2 mt-2 ">delete</button>
                                </form>
       </div>
        <div class="id-card mx-auto mb-5 px-5">
            <div class="id-card-header">Student ID Card</div>

            @if (isset($application->passport))
                <img src="{{ asset('storage/' . $application->passport) }}" alt="Passport Photo">

            @endif
            <div class="row ">
                <div class="col-6">
                    @if (isset($application->first_name) || isset($application->last_name) || isset($application->middle_name))
                        <div class="id-card-section">
                            <strong>Name:</strong>
                            {{ $application->first_name ?? '' }} {{ $application->middle_name ?? '' }}
                            {{ $application->last_name ?? '' }}
                        </div>
                    @endif

                    @if (isset($application->address))
                        <div class="id-card-section">
                            <strong>Address:</strong>
                            {{ $application->address }}
                        </div>
                    @endif

                    @if (isset($application->primary_phone))
                        <div class="id-card-section">
                            <strong>Primary Phone:</strong>
                            {{ $application->primary_phone }}
                        </div>
                    @endif

                    @if (isset($application->email))
                        <div class="id-card-section">
                            <strong>Email:</strong>
                            {{ $application->email }}
                        </div>
                    @endif

                    @if (isset($application->nin))
                        <div class="id-card-section">
                            <strong>NIN:</strong>
                            {{ $application->nin }}
                        </div>
                    @endif

                    @if (isset($application->birth_date))
                        <div class="id-card-section">
                            <strong>Date of Birth:</strong>
                            {{ $application->birth_date }}
                        </div>
                    @endif

                    @if (isset($application->marital_status))
                        <div class="id-card-section">
                            <strong>Marital Status:</strong>
                            {{ $application->marital_status }}
                        </div>
                    @endif
                </div>
                <div class="col-6">
                    @if (isset($application->emergency_contact_name))
                        <div class="id-card-section">
                            <strong>Emergency Contact:</strong>
                            {{ $application->emergency_contact_name }},
                            {{ $application->emergency_contact_primary_phone ?? '' }}
                        </div>
                    @endif

                    @if (isset($application->package))
                        <div class="id-card-section">
                            <strong>Package:</strong>
                            {{ $application->package }}
                        </div>
                    @endif

                    @if (isset($application->duration))
                        <div class="id-card-section">
                            <strong>Duration:</strong>
                            {{ $application->duration }}
                        </div>
                    @endif

                    @if (isset($application->start_date))
                        <div class="id-card-section">
                            <strong>Start Date:</strong>
                            {{ $application->start_date }}
                        </div>
                    @endif

                    @if (isset($application->end_date))
                        <div class="id-card-section">
                            <strong>End Date:</strong>
                            {{ $application->end_date }}
                        </div>
                    @endif

                    @if (isset($application->student_id))
                        <div class="id-card-section">
                            <strong>Student ID:</strong>
                            {{ $application->student_id }}
                        </div>
                    @endif

                    @if (isset($application->supervisor))
                        <div class="id-card-section">
                            <strong>Supervisor:</strong>
                            {{ $application->supervisor }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



</x-layout>
