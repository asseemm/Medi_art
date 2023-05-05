<?php namespace My\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMyServices2 extends Migration
{
    public function up()
    {
        Schema::table('my_services_', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('my_services_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
}
