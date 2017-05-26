<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsersAddColStatusId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('users', 'status_id'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('status_id')
                    ->after('id')
                    ->unsigned()
                    ->nullable()
                    ->foreign('status_id')
                    ->references('id')
                    ->on('status')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        if(Schema::hasColumn('users', 'status_id'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('status_id');
            });
        }
    }
}
