<?php namespace Yonas\Twitter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYonasTwitterTweet2 extends Migration
{
    public function up()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->string('owners')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yonas_twitter_tweet', function($table)
        {
            $table->dropColumn('owners');
        });
    }
}
