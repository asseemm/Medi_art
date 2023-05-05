<?php namespace My\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMyServices3 extends Migration
{
    public function up()
    {
        Schema::table('my_services_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('name')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('my_services_', function($table)
        {
            $table->dropColumn('id');
            $table->text('name')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}
