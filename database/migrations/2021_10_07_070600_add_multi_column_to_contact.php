<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultiColumnToContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('contacts', function (Blueprint $table) {
           $table->string('address_phone_number')->nullable();
           $table->string('address1_phone_number')->nullable();
           $table->text('google_map')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['address_phone_number',  'address1_phone_number', 'google_map']);
        });        
    }
}