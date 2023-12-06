<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazine_pages', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('genres_id');
            $table->foreign('genres_id')
                ->references('id')
                ->on('genres')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('publishers_id');
            $table->foreign('publishers_id')
                ->references('id')
                ->on('publishers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->date('publication_date');
            $table->text('description');
            $table->integer('price');
            $table->string('picture');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazine_pages');
    }
}
