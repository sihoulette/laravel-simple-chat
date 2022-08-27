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
        Schema::create('chat_pusher', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_id')
                ->unsigned();
            $table->bigInteger('user_id')
                ->unsigned()
                ->nullable();
            $table->timestamps();
            // Foreign keys
            $table->foreign('chat_id')
                ->references('id')
                ->on('chat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_pusher');
    }
};
