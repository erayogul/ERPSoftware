<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade');

            $table->integer('isAdmin')->default(0);


            $table->integer('stock_create')->default(0);
            $table->integer('stock_view')->default(0);
            $table->integer('stock_use')->default(0);
            $table->integer('stock_edit')->default(0);
            $table->integer('stock_delete')->default(0);

            $table->integer('welfare_create')->default(0);
            $table->integer('welfare_view')->default(0);
            $table->integer('welfare_edit')->default(0);
            $table->integer('welfare_delete')->default(0);

            $table->integer('employee_view_all')->default(0);
            $table->integer('employee_view_basic')->default(1);
            $table->integer('employee_view_hr')->default(0);
            $table->integer('employee_edit_all')->default(0);
            $table->integer('employee_edit_basic')->default(0);
            $table->integer('employee_edit_hr')->default(0);
            $table->integer('employee_delete')->default(0);

            $table->integer('department_create')->default(0);
            $table->integer('department_view')->default(0);
            $table->integer('department_edit')->default(0);
            $table->integer('department_delete')->default(0);


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
        Schema::dropIfExists('roles');
    }
}
