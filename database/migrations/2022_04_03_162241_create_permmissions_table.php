<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permmissions', function (Blueprint $table) {
            $table->id();
            $table->string('permissions_name');
            $table->timestamps();
        });
        Schema::create('permmissions_role', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Permission::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Role::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permmissions_role');
        Schema::dropIfExists('permmissions');
    }
}
