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
        Schema::create('external_monitors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Node::class)->constrained()->cascadeOnDelete();
            $table->tinyInteger('monitoring_enabled');
            $table->string('url')->nullable();
            $table->integer('timeout_threshold_seconds')->nullable();
            $table->dateTime('ssl_alert_threshold_days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_monitors');
    }
};
