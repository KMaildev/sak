<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('nrc')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('age')->nullable();
            $table->text('gender')->nullable();
            $table->text('passport')->nullable();
            $table->text('expire_date')->nullable();
            $table->text('education')->nullable();
            $table->text('language')->nullable();
            $table->text('current_address')->nullable();
            $table->text('attachment_file')->nullable();
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
        Schema::dropIfExists('job_enquiries');
    }
}
