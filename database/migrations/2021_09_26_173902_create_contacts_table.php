<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();                       
            $table->string('title');
            $table->text('address');
            $table->text('address_one');
            $table->string('open_time');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('inatagram_url');
            $table->string('youtube_url');
            $table->string('admin_mail_address');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}