<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('salary');
            $table->text('key1')->nullable();
            $table->text('value1')->nullable();
            $table->text('key2')->nullable();
            $table->text('value2')->nullable();
            $table->text('key3')->nullable();
            $table->text('value3')->nullable();
            $table->text('key4')->nullable();
            $table->text('value4')->nullable();
            $table->text('key5')->nullable();
            $table->text('value5')->nullable();
            $table->text('key6')->nullable();
            $table->text('value6')->nullable(); 
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
        Schema::dropIfExists('vacancies');
    }
}
