<?php namespace Fiddy\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('fiddy_site_addresses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('additional_info');
            $table->string('street');
            $table->string('city');
            $table->string('state', 2);
            $table->string('zip', 10);
            $table->integer('restaurant_id')->unsigned()->index();
            $table->foreign('restaurant_id')
                  ->references('id')
                  ->on('fiddy_site_restaurants')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiddy_site_addresses');
    }

}
