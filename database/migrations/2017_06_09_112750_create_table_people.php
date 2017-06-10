<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('people'))
        {
            Schema::create('people', function (Blueprint $table) {
                $table->increments('id');
                $table->string('username', 50)->unique();
                $table->string('firstname', 50)->nallable();
                $table->string('lastname', 50)->nallable();
                $table->string('gender', 10);
                $table->string('email')->unique();
                $table->string('password');
                $table->string('phone', 50)->nullable();
                $table->string('dob', 30)->nullable();
                $table->text('pob')->nullable();
                $table->text('addres')->nullable();
                $table->rememberToken();
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
        Schema::dropIfExists('people');
    }
}
