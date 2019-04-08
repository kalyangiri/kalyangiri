<?php namespace Kalyan\CvManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKalyanCvmanagement extends Migration
{
    public function up()
    {
        Schema::table('kalyan_cvmanagement_', function($table)
        {
            $table->date('from')->nullable();
            $table->date('to');
            $table->dropColumn('year');
        });
    }
    
    public function down()
    {
        Schema::table('kalyan_cvmanagement_', function($table)
        {
            $table->dropColumn('from');
            $table->dropColumn('to');
            $table->dateTime('year')->nullable();
        });
    }
}
