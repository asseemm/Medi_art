<?php namespace My\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMyServices4 extends Migration
{
    public function up()
    {
        Schema::table('my_services_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('my_services_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
