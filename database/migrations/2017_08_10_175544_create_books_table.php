<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author', 127);
            $table->unsignedInteger('publisher_id');
            $table->string('name');
            $table->string('summary');
            $table->string('image')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();

            $table->foreign('author')
                ->references('name')->on('authors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('publisher_id')
                ->references('id')->on('publishers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
