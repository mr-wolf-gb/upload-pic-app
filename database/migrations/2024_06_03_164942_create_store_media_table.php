<?php
/*
 * Author: WOLF
 * Name: 2024_06_03_164942_create_store_media_table.php
 * Modified : lun., 3 juin 2024 17:50
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreMediaTable extends Migration
{
    public function up(): void
    {
        Schema::create('store_media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_media');
    }
}
