<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('address');
            $table->string('primary_phone');
            $table->string('alternate_phone')->nullable();
            $table->string('email');
            $table->string('nin');
            $table->date('birth_date');
            $table->string('marital_status');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_address');
            $table->string('emergency_contact_primary_phone');
            $table->string('emergency_contact_alternate_phone')->nullable();
            $table->string('relationship');
            $table->string('package');
            $table->string('passport');
            $table->string('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('certificate_in_view');
            $table->string('requirement');
            //official use
            $table->string('student_id');
            $table->string('supervisor');
            $table->date('terminal_date');
            $table->string('designation');
            $table->string('ceo_remarks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
