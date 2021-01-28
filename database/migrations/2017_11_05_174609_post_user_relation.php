<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class PostUserRelation extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
           $table->integer('post_id')->unsigned()->index()->nullable();
           $table->foreign('post_id')->references('id')->on('posts');
        });
        Schema::table('posts', function(Blueprint $table) {
           $table->integer('user_id')->unsigned()->index();
           $table->foreign('user_id')->references('id')->on('users');
        });
    }
    public function down()
    {
    }
}
