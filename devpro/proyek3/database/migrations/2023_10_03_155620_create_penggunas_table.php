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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('telephone_number')->nullable();
            $table->string('link_profile')->nullable();
            $table->string('education_level')->nullable();
            $table->string('edu_institution')->nullable();
            $table->integer('star_date_edu')->nullable();
            $table->integer('end_date_edu')->nullable();
            $table->string('loc_edu')->nullable();
            $table->string('achievment')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('loc_org')->nullable();
            $table->integer('star_date_org')->nullable();
            $table->integer('end_date_org')->nullable();
            $table->string('job_desc')->nullable();
            $table->string('skiils')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
