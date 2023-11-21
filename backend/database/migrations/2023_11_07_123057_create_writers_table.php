<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Writer;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->date("szul_datum");
            $table->timestamps();
        });
    
    DB::table('writers')->insert([
        ['nev' => 'Nagy Zoltán', 'szul_datum' => '1978.04.22'],
        ['nev' => 'Kis Péter', 'szul_datum' => '1981.06.13']
    ]);

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
