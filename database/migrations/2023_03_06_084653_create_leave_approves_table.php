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
            $table->integer('leave_id');
            $table->string('reporting_boss');
            $table->string('reporting_boss_approval')->default('sent');
            $table->string('repoting_boss_reasone')->nullable();
            $table->string('department_head');
            $table->string('department_head_approval')->default('No Decision Yet');
            $table->string('departmental_resone')->nullable();
            $table->string('hr');
            $table->string('hr_approval')->default('No Decision Yet');
            $table->string('hr_resone')->nullable();
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
