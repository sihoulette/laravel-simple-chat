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
        Schema::create('chat_chain', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_id')
                ->unsigned();
            $table->bigInteger('chat_pusher_id')
                ->unsigned();
            $table->timestamps();
            // Foreign keys
            $table->foreign('chat_id')
                ->references('id')
                ->on('chat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('chat_pusher_id')
                ->references('id')
                ->on('chat_pusher')
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
        Schema::dropIfExists('chat_chain');
    }
};
