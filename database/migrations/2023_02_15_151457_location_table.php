<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table-> foreign('user_id')->references('id')->on('users');
            $table->ipAddress('ip');
            $table->decimal('coord_x', 10, 6);
            $table->decimal('coord_y', 10, 6);
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
        //
    }
}
