<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class PostStatus extends Migration
{
    public function up()
    {
        Schema::table('posts', function(Blueprint $table) {
            $table->boolean('online')->default(false);
        });
    }
    public function down()
    {
    }
}
