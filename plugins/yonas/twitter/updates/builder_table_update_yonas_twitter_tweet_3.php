<?php namespace Yonas\Twitter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYonasTwitterTweet3 extends Migration
{
    public function up()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->renameColumn('tweet', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->renameColumn('description', 'tweet');
        });
    }
}
