<?php namespace My\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMyServices extends Migration
{
    public function up()
    {
        Schema::table('my_services_', function($table)
        {
            $table->text('description');
            $table->dropColumn('phone');
        });
    }
    
    public function down()
    {
        Schema::table('my_services_', function($table)
        {
            $table->dropColumn('description');
            $table->bigInteger('phone');
        });
    }
}
