<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            $table->string('who_install');
            $table->string('system_complete');
            $table->bigInteger('usage');
            $table->string('system_type');
            $table->string('panels_place');
            $table->string('your_roof');
            $table->text('message');

            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('prefer_contact');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('country');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
