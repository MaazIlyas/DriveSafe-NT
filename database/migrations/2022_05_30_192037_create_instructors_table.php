<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('license_no')->unique();
            $table->string('exp_in_years')->nullable();
            $table->string('contact_num')->nullable();

            //Not nullable (atleast 1)
            $table->string('car_type');
            $table->string('language')->nullable();
            $table->text('bio')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->timestamps();

            //Composite index for performing search
            $table->index(['first_name', 'last_name'], 'full_name');

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
    }
};
