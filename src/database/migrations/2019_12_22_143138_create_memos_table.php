<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title', 100);	
            $table->integer('category_id')->nullable();
            $table->char('type', 2);	
            $table->longText('text');
            $table->boolean('is_show')->default(1);
            $table->timestamps(0);
            $table->softDeletesTz('deleted_at');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memos');
    }
}
