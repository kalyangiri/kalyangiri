<?php namespace Idnepal\Timeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIdnepalTimelineTimeline extends Migration
{
    public function up()
    {
        Schema::create('idnepal_timeline_timeline', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->longtext('description');
            $table->longtext('short_description');
            $table->date('started');
            $table->date('ended');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('idnepal_timeline_timeline');
    }
}
