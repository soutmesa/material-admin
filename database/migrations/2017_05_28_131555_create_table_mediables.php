<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMediables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('mediables'))
        {
            Schema::create('mediables', function (Blueprint $table) {
                $table->integer('media_id')
                    ->unsigned()
                    ->foreign('media_id')
                    ->references('id')
                    ->on('medias')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->string('mediable_type');
                $table->string('mediable_id')
                    ->nullable();

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
        Schema::dropIfExists('mediables');
    }
}
