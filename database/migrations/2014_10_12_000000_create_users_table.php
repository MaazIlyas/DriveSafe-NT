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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');

            //Adding a unique Index
            $table->string('username')->unique();

            //Adding a unique index on email to 
            $table->string('email')->unique();

            
            $table->timestamp('email_verified_at')->nullable(); //Currently not verifying email
            $table->string('password');
            $table->string('salt')->nullable();
            $table->string('role')->default('student');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
