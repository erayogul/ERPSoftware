<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('employee_id')->unsigned()->unique();
			$table->string('name', 191)->nullable();
			$table->string('surname', 191)->nullable();
			$table->string('gender', 191)->nullable();
			$table->string('blood_group', 191)->nullable();
			$table->string('place_of_birth')->nullable();
			$table->string('date_of_birth_official', 191)->nullable();
			$table->string('mobile', 191)->nullable();
			$table->string('address', 191)->nullable();
			$table->string('marital_status', 191)->nullable();
            $table->string('nationality', 191)->nullable();
            $table->string('id_number', 191)->nullable();
			$table->string('emergency_contact_name', 191)->nullable();
			$table->string('emergency_contact_mobile', 191)->nullable();
            $table->string('emergency_contact_type', 191)->nullable();
            $table->string('education_status', 191)->nullable();
			$table->string('military_status', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('start_date', 191)->nullable();
			$table->string('end_date')->nullable();
			$table->string('department', 191)->nullable();
			$table->string('unit', 191)->nullable();
			$table->integer('manager')->nullable();
			$table->string('position', 191)->nullable();
			$table->string('position_eng', 191)->nullable();
			$table->string('administrative_title')->nullable();
			$table->string('job_type', 191)->nullable();
			$table->string('account_number', 191)->nullable();
			$table->string('tshirt_size', 191)->nullable();
			$table->string('avatar', 191)->nullable();
			$table->string('residential_status')->nullable();
			$table->string('bg_image', 191)->nullable();
			$table->string('status', 191)->default('0');
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
        Schema::dropIfExists('employees');
    }
}
