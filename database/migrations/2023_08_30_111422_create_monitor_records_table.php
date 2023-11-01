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
        Schema::create('monitor_records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Node::class)->constrained()->cascadeOnDelete();
            $table->index('node_id');
            $table->tinyInteger('monitor_type');
            $table->int('status_code')->nullable();
            $table->float('response_time')->nullable();
            $table->longText('response_body')->nullable();
            $table->text('response_headers')->nullable();
            $table->text('log_content')->nullable();
            $table->dateTime('ssl_certificate_expiration')->nullable();
            $table->text('error_message')->nullable();
            $table->integer('load_average')->nullable();
            $table->integer('disk_usage')->nullable();
            $table->integer('mysql_memory_usage')->nullable();
            $table->integer('apache_memory_usage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitor_records');
    }
};
