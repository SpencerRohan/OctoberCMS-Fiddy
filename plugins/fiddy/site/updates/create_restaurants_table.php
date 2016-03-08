<?php namespace Fiddy\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRestaurantsTable extends Migration
{

    public function up()
    {
        Schema::create('fiddy_site_restaurants', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code');
            $table->integer('logo_id')->unsigned()->index();
            $table->foreign('logo_id')->references('id')->on('fiddy_site_images');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiddy_site_restaurants');
    }

}
