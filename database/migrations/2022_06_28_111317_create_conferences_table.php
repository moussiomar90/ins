<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();

            $table->string('titre');
            $table->integer('cat_conf');
            $table->string('evenement_conf');
            $table->string('salle');
            $table->string('type');
            $table->string('thematique');
            $table->string('lieu');
            $table->time('heure_deb');
            $table->time('heure_fin');
            $table->date('date');

            $table->text('reposnable')->nullable();
            $table->text('discutant')->nullable();
            $table->text('moderater')->nullable();
            $table->longText('details');

            $table->longText('resumes_fr')->nullable();
            $table->longText('resumes_ar')->nullable();
            $table->longText('resumes_ang')->nullable();
            $table->boolean('etat');


            $table->rememberToken();
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
        Schema::dropIfExists('conferences');
    }
}
