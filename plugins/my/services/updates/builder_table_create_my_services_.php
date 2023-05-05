<?php namespace My\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMyServices extends Migration
{
    public function up()
    {
        Schema::create('my_services_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->bigInteger('phone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('my_services_');
    }
}
