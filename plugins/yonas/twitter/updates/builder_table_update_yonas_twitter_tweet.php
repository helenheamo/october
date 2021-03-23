<?php namespace Yonas\Twitter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYonasTwitterTweet extends Migration
{
    public function up()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
