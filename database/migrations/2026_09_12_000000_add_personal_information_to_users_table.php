<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('national_id', 10)->nullable()->unique()->after('email');
            $table->date('date_of_birth')->nullable()->after('national_id');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['national_id']);
            $table->dropColumn(['national_id', 'date_of_birth']);
        });
    }
};
