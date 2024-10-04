<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
public function up(): void
{
Schema::create('boxes', function (Blueprint $table) {
$table->id();
$table->string('box_number')->unique();
$table->string('status');
$table->string('tenant_name')->nullable();
$table->string('location');
$table->float('surface');
$table->decimal('price_per_month', 8, 2);
$table->timestamps();
});
}

public function down(): void
{
Schema::dropIfExists('boxes');
}
}
