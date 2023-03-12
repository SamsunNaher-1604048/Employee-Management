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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('profile_pic');
            $table->string('cv');
            $table->string('fingerprint_id')->nullable();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('department_id');
            $table->string('company_id');
            $table->string('designation');
            $table->string('repoting_boss')->default('No Repoting boss');
            $table->string('leave')->default(20);
            $table->string('status');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
