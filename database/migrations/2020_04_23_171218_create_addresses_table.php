<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->references('id')
                ->on((new \App\User())->getTable())
                ->cascadeOnDelete();
            $table->string('nickname', 100);
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip_code', 10);
            $table->string('country_code', 10);
            $table->boolean('primary')->default(false);
            $table->timestamps();
        });
    }
}
