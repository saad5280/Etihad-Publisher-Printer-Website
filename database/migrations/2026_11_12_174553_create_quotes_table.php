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
        Schema::create('quotes', function (Blueprint $table): void {
            $table->id();
            $table->string('reference_number')->unique();
            $table->string('client_name');
            $table->string('institution_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('project_classification');
            $table->unsignedInteger('page_count');
            $table->unsignedInteger('desired_print_run');
            $table->string('inside_paper');
            $table->string('cover_finish');
            $table->json('cover_treatments')->nullable();
            $table->string('binding_preference');
            $table->string('delivery_destination');
            $table->text('notes')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
