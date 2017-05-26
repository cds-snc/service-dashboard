<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('service_id_number');
            $table->text('description');
            $table->unsignedInteger('service_type_id')->nullable();
            $table->unsignedInteger('responsibility_area_id');
            $table->unsignedInteger('program_id');
            $table->text('authority')->nullable();
            $table->boolean('service_agreements');
            $table->tinyInteger('service_orientation')->nullable(); // 1 = external; 2 = internal; 3 = both;
            $table->boolean('user_fee');
            $table->boolean('service_standards');
            $table->boolean('performance_targets');
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
        Schema::dropIfExists('services');
    }
}
