<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_id');
            $table->integer('score')->nullable();
            $table->tinyInteger('account_registration')->nullable();  // null = n/a; 1=yes 0=no
            $table->tinyInteger('authentication')->nullable();
            $table->tinyInteger('application')->nullable();
            $table->tinyInteger('decision')->nullable();
            $table->tinyInteger('issuance')->nullable();
            $table->tinyInteger('issue_resolution')->nullable();
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
        Schema::dropIfExists('e_services');
    }
}