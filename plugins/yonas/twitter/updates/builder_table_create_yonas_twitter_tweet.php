<?php namespace Yonas\Twitter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYonasTwitterTweet extends Migration
{
    public function up()
    {
        Schema::create('yonas_twitter_tweet', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('tweet')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yonas_twitter_tweet');
    }
}
