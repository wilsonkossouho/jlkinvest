<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
          $table->id();
          $table->dateTime('dateEcheance');
          $table->foreignIdFor(Prospect::class)->constrained();
          $table->string('observation');
          $table->double('objectifDeCollecte');
          $table->string('besoinDuClient');
          $table->foreignIdFor(Produit::class)->constrained();

          $table->string('typeActivity');
          $table->string('reference');

          $table->text('resume')->nullable();
          $table->string('observation');
          $table->string('besoinDuClient');
          $table->double('objectifDeCollecte');
          $table->double('ressourceCollecte');
          $table->text('produitsCom');
          $table->text('actionEntreprendre');
          $table->string('statut');
          $table->foreignIdFor(User::class)->constrained();
          $table->foreignIdFor(Prospect::class)->constrained();
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
        Schema::dropIfExists('activites');
    }
}
