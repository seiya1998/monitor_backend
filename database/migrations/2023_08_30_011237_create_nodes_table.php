<?php

use App\Models\Company;
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
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained()->cascadeOnDelete();
            $table->uuid('uuid')->unique();
            $table->integer('monitoring_cycle')->nullable();
            $table->tinyInteger('alert_notification_type');
            $table->string('chatwork_api_token')->nullable();
            $table->string('chatwork_room_id')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
