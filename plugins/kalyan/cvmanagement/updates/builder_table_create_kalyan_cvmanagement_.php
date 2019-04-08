<?php namespace Kalyan\CvManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalyanCvmanagement extends Migration
{
    public function up()
    {
        Schema::create('kalyan_cvmanagement_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->dateTime('year')->nullable();
            $table->text('description');
            $table->text('shortdescription');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalyan_cvmanagement_');
    }
}
