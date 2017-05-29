<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCommentsAddColPostId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasColumn('comments', 'post_id'))
        {
            Schema::table('comments', function (Blueprint $table) {
                $table->integer('post_id')
                    ->after('id')
                    ->unsigned()
                    ->nullable()
                    ->foreign('post_id')
                    ->references('id')
                    ->on('posts')
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

        if(Schema::hasColumn('comments', 'post_id'))
        {
            Schema::table('comments', function (Blueprint $table) {
                $table->dropColumn('post_id');
            });
        }
    }
}
