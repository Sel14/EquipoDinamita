<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fishmen', function (Blueprint $table) {
<<<<<<< HEAD
             $table->increments('id');
=======
            $table->increments('id');
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
            $table->string('Name');
            $table->integer('Phone');
            $table->string('User');
            $table->text('Password');
            $table->text('Place');
<<<<<<< HEAD

=======
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
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
        Schema::dropIfExists('fishmen');
    }
}
