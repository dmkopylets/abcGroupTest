<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClickTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('click', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->ipAddress('ip');
            $table->timestamps(0);
            $table->text('referer')->nullable();
            $table->text('user_agent')->nullable();
        });
        DB::statement('drop sequence if exists public.click_new_id_seq');
        DB::statement('create sequence public.click_new_id_seq');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('drop sequence if exists public.click_new_id_seq');
        Schema::dropIfExists('click');
    }
};
