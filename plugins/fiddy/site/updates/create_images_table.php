<?php namespace Fiddy\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateImagesTable extends Migration
{

    public function up()
    {
        Schema::create('fiddy_site_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description', 50);
            $table->string('href');
            $table->string('alt', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiddy_site_images');
    }

}
