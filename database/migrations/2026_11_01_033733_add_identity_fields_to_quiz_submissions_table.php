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
        Schema::table('quiz_submissions', function (Blueprint $table) {
            $table->string('has_bimbel')->nullable()->after('whatsapp');
            $table->string('bimbel_duration')->nullable()->after('has_bimbel');
            $table->string('branch')->nullable()->after('bimbel_duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quiz_submissions', function (Blueprint $table) {
            $table->dropColumn(['has_bimbel', 'bimbel_duration', 'branch']);
        });
    }
};
