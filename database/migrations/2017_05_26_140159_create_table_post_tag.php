<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('post_tag'))
        {
            Schema::create('post_tag', function (Blueprint $table) {
                $table->integer('post_id')
                    ->unsigned()
                    ->nullable()
                    ->foreign('post_id')
                    ->references('id')
                    ->on('posts')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->integer('tag_id')
                    ->unsigned()
                    ->nullable()
                    ->foreign('tag_id')
                    ->references('id')
                    ->on('tags')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->primary(['post_id', 'tag_id']);
                
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
