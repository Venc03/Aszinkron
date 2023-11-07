<?php

use App\Models\WriterModel;
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
        Schema::create('writer_models', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 32)->unique();
            $table->date('birth')->date("Y-m-d");
            $table->timestamps();
        });

        WriterModel::create([
            'name' => "Jhonny Depp", 
            'birth' => '1980-01-21', 
        ]);

        WriterModel::create([
            'name' => "Asimov", 
            'birth' => '1890-11-26'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writer_models');
    }
};
