<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('medias'))
        {
            Schema::create('medias', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 100);
                $table->string('caption', 100);
                $table->string('slug', 100);
                $table->string('extension', 5);
                $table->string('size', 20);
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('medias');
    }
}
