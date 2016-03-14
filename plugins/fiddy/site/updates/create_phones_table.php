<?php namespace Fiddy\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePhonesTable extends Migration
{

    public function up()
    {
        Schema::create('fiddy_site_phones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('phone_number');
            $table->integer('extension');
            $table->integer('contactable_id')->unsigned();
            $table->string('contactable_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiddy_site_phones');
    }

}
