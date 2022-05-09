<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('education')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('father_job')->nullable();
            $table->text('mother_job')->nullable();
            $table->text('gender')->nullable();
            $table->text('nationality')->nullable();
            $table->text('nrc_no')->nullable();
            $table->text('passport_date_of_issue')->nullable();
            $table->text('weight_height')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('phone_no')->nullable();
            $table->text('email')->nullable();
            $table->text('entry_number')->nullable();
            $table->text('other_class')->nullable();
            $table->text('photo')->nullable();
            $table->text('code')->nullable();
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
        Schema::dropIfExists('enrollment_requests');
    }
}
