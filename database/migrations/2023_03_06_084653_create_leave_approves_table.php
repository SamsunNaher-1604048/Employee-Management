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
        Schema::create('leave_approves', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->string('resone');
            $table->string('reporting_boss');
            $table->string('reporting_boss_approval')->nullable();
            $table->string('repoting_boss_reasone')->nullable();
            $table->string('department_head');
            $table->string('department_head_approval')->nullable();
            $table->string('departmental_resone')->nullable();
            $table->string('hr');
            $table->string('hr_approval')->nullable();
            $table->string('hr_resone')->nullable();
            $table->integer('total_approval')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_approves');
    }
};
