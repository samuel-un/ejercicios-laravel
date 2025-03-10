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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
			$table->string('nombre', 255);
			$table->string('email',255)->unique();
            $table->timestamps();
        });
    
		Schema::table('posts', function (Blueprint $table) {
			$table->foreignId('user_id')->constrained('usuarios');
	});
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
    });
    Schema::dropIfExists('usuarios');
}
};