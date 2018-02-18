<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('song_id')->unsigned()->index();
            #$table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs');
            
            $table->string('tr_code')->default('');
            $table->string('title_tr1')->default('');
            $table->string('title_tr2')->default('');
            $table->text('lyrics_tr1');
            $table->text('lyrics_tr2');
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
        Schema::dropIfExists('translations');
    }
}
