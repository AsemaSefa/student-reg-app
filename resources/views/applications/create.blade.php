<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <form>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="mb-3">
                <label for="primary_phone" class="form-label">Primary Phone</label>
                <input type="text" class="form-control" id="primary_phone" name="primary_phone" required>
            </div>

            <div class="mb-3">
                <label for="alternate_phone" class="form-label">Alternate Phone</label>
                <input type="text" class="form-control" id="alternate_phone" name="alternate_phone">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="nin" class="form-label">NIN</label>
                <input type="text" class="form-control" id="nin" name="nin">
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
            </div>

            <div class="mb-3">
                <label for="marital_status" class="form-label">Marital Status</label>
                <input type="text" class="form-control" id="marital_status" name="marital_status">
            </div>

            <div class="mb-3">
                <label for="emergency_contact_name" class="form-label">Emergency Contact Name</label>
                <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" required>
            </div>

            <div class="mb-3">
                <label for="emergency_contact_address" class="form-label">Emergency Contact Address</label>
                <input type="text" class="form-control" id="emergency_contact_address" name="emergency_contact_address" required>
            </div>

            <div class="mb-3">
                <label for="emergency_contact_primary_phone" class="form-label">Emergency Contact Primary Phone</label>
                <input type="text" class="form-control" id="emergency_contact_primary_phone" name="emergency_contact_primary_phone" required>
            </div>

            <div class="mb-3">
                <label for="emergency_contact_alternate_phone" class="form-label">Emergency Contact Alternate Phone</label>
                <input type="text" class="form-control" id="emergency_contact_alternate_phone" name="emergency_contact_alternate_phone">
            </div>

            <div class="mb-3">
                <label for="relationship" class="form-label">Relationship</label>
                <input type="text" class="form-control" id="relationship" name="relationship" required>
            </div>

            <div class="mb-3">
                <label for="package" class="form-label">Package</label>
                <input type="text" class="form-control" id="package" name="package">
            </div>

            <div class="mb-3">
                <label for="passport" class="form-label">Passport</label>
                <input type="text" class="form-control" id="passport" name="passport">
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>

            <div class="mb-3">
                <label for="certificate_in_view" class="form-label">Certificate In View</label>
                <input type="text" class="form-control" id="certificate_in_view" name="certificate_in_view">
            </div>

            <div class="mb-3">
                <label for="requirement" class="form-label">Requirement</label>
                <input type="text" class="form-control" id="requirement" name="requirement">
            </div>

            <h4>Official Use</h4>

            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id">
            </div>

            <div class="mb-3">
                <label for="supervisor" class="form-label">Supervisor</label>
                <input type="text" class="form-control" id="supervisor" name="supervisor">
            </div>

            <div class="mb-3">
                <label for="terminal_date" class="form-label">Terminal Date</label>
                <input type="date" class="form-control" id="terminal_date" name="terminal_date">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation">
            </div>

            <div class="mb-3">
                <label for="ceo_remarks" class="form-label">CEO Remarks</label>
                <input type="text" class="form-control" id="ceo_remarks" name="ceo_remarks">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
