<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->bigInteger('freelancer_id')->unsigned()->index()->nullable();
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
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
        Schema::dropIfExists('competances');
    }
}