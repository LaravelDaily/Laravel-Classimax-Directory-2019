<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1553590968013CompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
