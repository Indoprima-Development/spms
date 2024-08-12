<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sparepart', function (Blueprint $table) {
            $table->id();
            $table->string('Item Number');
            $table->text('ProductName');
            $table->text('Unit');
            $table->text('KategoriGolongan');
            $table->text('UnitMesin');
            $table->text('Kategori');
            $table->text('SafetyStock');
            $table->text('Qty');
            $table->text('Location');
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
        //
    }
};
