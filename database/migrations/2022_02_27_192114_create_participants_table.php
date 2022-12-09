<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email') ;
            $table->string('universite')->nullable();
            $table->string('institution')->nullable();
            $table->string('nationalite');
            $table->string('telephone')->nullable();
            $table->string('paysresidence');
            $table->string('statut')->nullable();
            $table->string('faculte')->nullable();
            $table->string('labo')->nullable();
            $table->boolean('statut_particulier');
            $table->boolean('visite');
            $table->integer('exemption');
            $table->boolean('confirmation')->default(0);


            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            return redirect('register');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
