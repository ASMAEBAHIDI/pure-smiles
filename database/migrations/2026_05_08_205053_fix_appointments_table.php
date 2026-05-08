<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            
            if (!Schema::hasColumn('appointments', 'patient_name')) {
                $table->string('patient_name')->nullable();
            }
            if (!Schema::hasColumn('appointments', 'patient_email')) {
                $table->string('patient_email')->nullable();
            }
            if (!Schema::hasColumn('appointments', 'patient_phone')) {
                $table->string('patient_phone')->nullable();
            }
            if (!Schema::hasColumn('appointments', 'notes')) {
                $table->text('notes')->nullable();
            }
            
           
            $table->string('patient_name')->nullable()->change();
            $table->string('patient_email')->nullable()->change();
            $table->string('patient_phone')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('patient_name')->nullable(false)->change();
            $table->string('patient_email')->nullable(false)->change();
            $table->string('patient_phone')->nullable(false)->change();
        });
    }
};