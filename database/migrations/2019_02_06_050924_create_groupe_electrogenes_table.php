<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeElectrogenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_electrogenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('type')->nullable();
            $table->string('marque')->nullable();
            $table->string('puissance')->nullable();
            $table->longText('utilisation')->nullable();
            $table->integer('id_site')->unsigned()->nullable();
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
        Schema::dropIfExists('groupe_electrogenes');
    }
}
