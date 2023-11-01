<?php

use App\Models\InternalMonitor;
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
        Schema::create('internal_log_monitors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(InternalMonitor::class)->constrained()->cascadeOnDelete();
            $table->string('log_full_path')->nullable();
            $table->string('error_conditions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_log_monitors');
    }
};
