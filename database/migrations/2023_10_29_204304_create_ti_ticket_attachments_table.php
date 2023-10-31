<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ti_ticket_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('url');
            $table->bigInteger('id_ticket')->unsigned();
            $table->foreign('id_ticket')->on('ti_ticket')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ti_ticket_attachments');
    }
};
