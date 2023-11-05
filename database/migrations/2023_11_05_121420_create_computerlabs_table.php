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
        Schema::create('computerlabs', function (Blueprint $table) {
            $table->id();
            $table->integer('PC_NO');
            $table->string('Operating_System');
            $table->bigInteger('student_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')
                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computerlabs');
    }
};
