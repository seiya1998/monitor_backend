<?php

use App\Models\Node;
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
        Schema::create('internal_monitors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Node::class)->constrained()->cascadeOnDelete();
            $table->tinyInteger('monitoring_enabled');
            $table->integer('load_average_threshold')->nullable();
            $table->integer('disk_usage_threshold')->nullable();
            $table->integer('mysql_memory_threshold')->nullable();
            $table->integer('apache_memory_threshold')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_monitors');
    }
};
