<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class PostUserRelation extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
<<<<<<< HEAD
           $table->integer('post_id')->unsigned()->index()->nullable();
=======
           $table->integer('post_id')->unsigned()->index();
>>>>>>> b076e1ed694691c0cce52a04226d525504ae15af
           $table->foreign('post_id')->references('id')->on('posts');
        });
        Schema::table('posts', function(Blueprint $table) {
           $table->integer('user_id')->unsigned()->index();
           $table->foreign('user_id')->references('id')->on('users');
        });
    }
    public function down()
    {
<<<<<<< HEAD
=======
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn(['user_id']);
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->dropColumn(['post_id']);
        });
>>>>>>> b076e1ed694691c0cce52a04226d525504ae15af
    }
}
