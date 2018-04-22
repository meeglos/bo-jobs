<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ticketId');
            $table->string('ticketCode');
            $table->string('ticketTitle');
            $table->string('ticketCreatedAt');
            $table->string('ticketLastUpdate');
            $table->string('ticketStatus');
            $table->string('ticketCreatorId');
            $table->string('ticketOwnerId');
            $table->string('ticketOrigin');
            $table->string('clientId');

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
        Schema::dropIfExists('tickets');
    }
}
