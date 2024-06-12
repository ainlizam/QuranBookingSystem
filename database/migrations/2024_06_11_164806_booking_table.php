<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->enum('session_day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday']);
            $table->enum('session_time', ['9am - 10am | Ustaz Muazzam','2pm - 3pm | Ustazah Hanum','5pm - 6pm | Ustaz Zaid Muhammad','8pm - 9pm | Ustazah Ain Lily']);
            $table->enum('class_type', ['iqra', 'quran']);
            $table->enum('session_type', ['online', 'in-person']);
            $table->enum('study_level', ['beginner', 'intermediate', 'advanced']);
            $table->text('additional_info')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
