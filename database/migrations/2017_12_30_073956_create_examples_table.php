<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examples', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->text('snippet');
            $table->timestamps();
        });

        Schema::create('example_snippet', function (Blueprint $table) {
            $table->integer('snippet_id');
            $table->integer('example_id');
            $table->primary(['example_id', 'snippet_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('examples');
      Schema::dropIfExists('example_snippet');
    }
}
