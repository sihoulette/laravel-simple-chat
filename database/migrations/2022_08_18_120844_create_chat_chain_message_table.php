<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_chain_message', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_chain_id')
                ->unsigned();
            $table->bigInteger('chat_message_id')
                ->unsigned();
            $table->timestamps();
            // Foreign keys
            $table->foreign('chat_chain_id')
                ->references('id')
                ->on('chat_chain')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('chat_message_id')
                ->references('id')
                ->on('chat_message')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_chain_message');
    }
};
