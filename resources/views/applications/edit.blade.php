<x-layout>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <form action={{route('applications.update', $application->id)}} method="POST" enctype="multipart/form-data" class="row align-baseline">
            @csrf
            @method('PATCH')
            <div class="mb-3 col-md-4">
                <div class="w-25">
                 <img class="img-thumbnail img-responsive rounded"
                 src="{{ $application->passport ? asset('storage/' . $application->passport) : asset('images/defaultdp.jpeg') }}"
                 alt="">
                </div>
                 <label for="passport" class="form-label">Passport</label>
                 <input value="{{ $application->passport }}" type="file" class="form-control" id="passport" name="passport">
                 @if ($errors->has('passport'))
                     <div class="text-danger">{{ $errors->first('passport') }}</div>
                 @endif
             </div>

            <div class="mb-3 col-md-4">
                <label for="first_name" class="form-label">First Name</label>
                <input value="{{ $application->first_name }}" type="text" class="form-control" id="first_name" name="first_name" required>
                @if ($errors->has('first_name'))
                    <div class="text-danger">{{ $errors->first('first_name') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="last_name" class="form-label">Last Name</label>
                <input value="{{ $application->last_name }}" type="text" class="form-control" id="last_name" name="last_name" required>
                @if ($errors->has('last_name'))
                    <div class="text-danger">{{ $errors->first('last_name') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input value="{{ $application->middle_name }}" type="text" class="form-control" id="middle_name" name="middle_name">
                @if ($errors->has('middle_name'))
                    <div class="text-danger">{{ $errors->first('middle_name') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="address" class="form-label">Address</label>
                <input value="{{ $application->address }}" type="text" class="form-control" id="address" name="address" required>
                @if ($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="primary_phone" class="form-label">Primary Phone</label>
                <input value="{{ $application->primary_phone }}" type="text" class="form-control" id="primary_phone" name="primary_phone" required>
                @if ($errors->has('primary_phone'))
                    <div class="text-danger">{{ $errors->first('primary_phone') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="alternate_phone" class="form-label">Alternate Phone</label>
                <input value="{{ $application->alternate_phone }}" type="text" class="form-control" id="alternate_phone" name="alternate_phone">
                @if ($errors->has('alternate_phone'))
                    <div class="text-danger">{{ $errors->first('alternate_phone') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="email" class="form-label">Email</label>
                <input value="{{ $application->email }}" type="email" class="form-control" id="email" name="email" required>
                @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="nin" class="form-label">NIN</label>
                <input value="{{ $application->nin }}" type="text" class="form-control" id="nin" name="nin">
                @if ($errors->has('nin'))
                    <div class="text-danger">{{ $errors->first('nin') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input value="{{ $application->birth_date }}" type="date" class="form-control" id="birth_date" name="birth_date" required>
                @if ($errors->has('birth_date'))
                    <div class="text-danger">{{ $errors->first('birth_date') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="marital_status" class="form-label">Marital Status</label>
                <input value="{{ $application->marital_status }}" type="text" class="form-control" id="marital_status" name="marital_status">
                @if ($errors->has('marital_status'))
                    <div class="text-danger">{{ $errors->first('marital_status') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="emergency_contact_name" class="form-label">Emergency Contact Name</label>
                <input value="{{ $application->emergency_contact_name }}" type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" required>
                @if ($errors->has('emergency_content_name'))
                    <div class="text-danger">{{ $errors->first('emergency_content_name') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="emergency_contact_address" class="form-label">Emergency Contact Address</label>
                <input value="{{ $application->emergency_contact_address }}" type="text" class="form-control" id="emergency_contact_address" name="emergency_contact_address" required>
                @if ($errors->has('emergency_contact_address'))
                    <div class="text-danger">{{ $errors->first('emergency_contact_address') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="emergency_contact_primary_phone" class="form-label">Emergency Contact Primary Phone</label>
                <input value="{{ $application->emergency_contact_primary_phone }}" type="text" class="form-control" id="emergency_contact_primary_phone" name="emergency_contact_primary_phone" required>
                @if ($errors->has('emergency_contact_primary_phone'))
                    <div class="text-danger">{{ $errors->first('emergency_contact_primary_phone') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="emergency_contact_alternate_phone" class="form-label">Emergency Contact Alternate Phone</label>
                <input value="{{ $application->emergency_contact_alternate_phone }}" type="text" class="form-control" id="emergency_contact_alternate_phone" name="emergency_contact_alternate_phone">
            </div>

            <div class="mb-3 col-md-4">
                <label for="relationship" class="form-label">Relationship</label>
                <input value="{{ $application->relationship }}" type="text" class="form-control" id="relationship" name="relationship" required>
                @if ($errors->has('relationship'))
                    <div class="text-danger">{{ $errors->first('relationship') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="package" class="form-label">Package</label>
                <input value="{{ $application->package }}" type="text" class="form-control" id="package" name="package">
                @if ($errors->has('package'))
                    <div class="text-danger">{{ $errors->first('package') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="duration" class="form-label">Duration</label>
                <input value="{{ $application->duration }}" type="text" class="form-control" id="duration" name="duration">
                @if ($errors->has('duration'))
                    <div class="text-danger">{{ $errors->first('duration') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="start_date" class="form-label">Start Date</label>
                <input value="{{ $application->start_date }}" type="date" class="form-control" id="start_date" name="start_date" required>
                @if ($errors->has('start_date'))
                    <div class="text-danger">{{ $errors->first('start_date') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="end_date" class="form-label">End Date</label>
                <input value="{{ $application->end_date }}" type="date" class="form-control" id="end_date" name="end_date" required>
                @if ($errors->has('end_date'))
                    <div class="text-danger">{{ $errors->first('end_date') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="certificate_in_view" class="form-label">Certificate In View</label>
                <input value="{{ $application->certificate_in_view }}" type="text" class="form-control" id="certificate_in_view" name="certificate_in_view">
                @if ($errors->has('certificate_in_view'))
                    <div class="text-danger">{{ $errors->first('certificate_in_view') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="requirement" class="form-label">Requirement</label>
                <input value="{{ $application->requirement }}" type="text" class="form-control" id="requirement" name="requirement">
                @if ($errors->has('requirement'))
                    <div class="text-danger">{{ $errors->first('requirement') }}</div>
                @endif
            </div>

            <h4>Official Use</h4>

            <div class="mb-3 col-md-4">
                <label for="student_id" class="form-label">Student ID</label>
                <input value="{{ $application->student_id }}" type="text" class="form-control" id="student_id" name="student_id">
                @if ($errors->has('student_id'))
                    <div class="text-danger">{{ $errors->first('student_id') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="supervisor" class="form-label">Supervisor</label>
                <input value="{{ $application->supervisor }}" type="text" class="form-control" id="supervisor" name="supervisor">
                @if ($errors->has('supervisor'))
                    <div class="text-danger">{{ $errors->first('supervisor') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="terminal_date" class="form-label">Terminal Date</label>
                <input value="{{ $application->terminal_date }}" type="date" class="form-control" id="terminal_date" name="terminal_date">
                @if ($errors->has('terminal_date'))
                    <div class="text-danger">{{ $errors->first('terminal_date') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="designation" class="form-label">Designation</label>
                <input value="{{ $application->designation }}" type="text" class="form-control" id="designation" name="designation">
                @if ($errors->has('designation'))
                    <div class="text-danger">{{ $errors->first('designation') }}</div>
                @endif
            </div>

            <div class="mb-3 col-md-4">
                <label for="ceo_remarks" class="form-label">CEO Remarks</label>
                <input value="{{ $application->first_name }}" type="text" class="form-control" id="ceo_remarks" name="ceo_remarks">
                @if ($errors->has('ceo_remarks'))
                    <div class="text-danger">{{ $errors->first('ceo_remarks') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</x-layout>
   