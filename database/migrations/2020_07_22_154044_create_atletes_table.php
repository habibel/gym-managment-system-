<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('tel');
            $table->string('gender');
            $table->date('dateinscription');
            $table->string('statu');
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
        Schema::dropIfExists('atletes');
    }
}
