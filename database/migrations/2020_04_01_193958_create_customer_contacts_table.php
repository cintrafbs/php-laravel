<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade');
            $table->string('postcode',8);
            $table->string('address');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->string('district',100);
            $table->string('city',100);
            $table->string('state',2);
            $table->string('phone',11)->nullable();
            $table->string('cell',11)->nullable();
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
        Schema::dropIfExists('customer_contacts');
    }
}
