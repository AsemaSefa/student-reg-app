<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'primary_phone' => 'required|string|max:15',
            'alternate_phone' => 'nullable|string|max:15',
            'email' => 'required|email|max:255|unique:applications,email,' . $this->route('applications'),
            'nin' => 'required|string|max:20|unique:applications,nin,' . $this->route('applications'),
            'birth_date' => 'required|date',
            'marital_status' => 'required|string|max:50',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_address' => 'required|string|max:255',
            'emergency_contact_primary_phone' => 'required|string|max:15',
            'emergency_contact_alternate_phone' => 'nullable|string|max:15',
            'relationship' => 'required|string|max:100',
            'package' => 'required|string|max:255',
            'passport' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
            'duration' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'certificate_in_view' => 'required|string|max:255',
            'requirement' => 'nullable|string|max:255',

            // Official use
            'student_id' => 'nullable|string|max:100',
            'supervisor' => 'nullable|string|max:255',
            'terminal_date' => 'nullable|date',
            'designation' => 'nullable|string|max:100',
            'ceo_remarks' => 'nullable|string|max:255',
        ];
    }
}
