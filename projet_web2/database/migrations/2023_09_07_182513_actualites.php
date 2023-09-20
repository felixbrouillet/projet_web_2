<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actualites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
<<<<<<< HEAD
            $table->string('contenu');
            $table->string('image')->nullable();
=======
            $table->text('contenu');
            $table->string('image');
>>>>>>> e8c14ba7028c9ef7c4deb040c579a27496e62df6
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
