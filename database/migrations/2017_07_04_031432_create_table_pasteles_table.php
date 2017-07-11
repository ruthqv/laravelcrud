<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePastelesTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasteles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->enum('sabor', ['chocolate','vainilla','cheesecake']);
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
        Schema::drop('pasteles');
    }
}
