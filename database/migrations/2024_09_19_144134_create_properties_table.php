<?php

use App\Enums\PropertyStatus;
use App\Enums\PropertyType;
use App\Models\User;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('address');
            $table->enum('type', PropertyType::toArray());
            $table->decimal(column:'area', total:5, places:1);
            $table->tinyInteger('rooms');
            $table->text('description');
            $table->enum('status', PropertyStatus::toArray());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
