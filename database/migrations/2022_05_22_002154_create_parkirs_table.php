<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkirs', function (Blueprint $table) {
            $table->id();
            $table->string('no_pol');
            $table->string('kode_unik')->nullable()->default(null);
            $table->integer('status')->nullable()->default(null);
            $table->timestamp('jam_masuk')->nullable()->default(null);
            $table->timestamp('jam_keluar')->nullable()->default(null);
            $table->integer('id_tipe_kendaraan');
            $table->integer('id_tarif');
            $table->bigInteger('total_tarif')->nullable()->default(null);
            $table->integer('id_created')->nullable()->default(null);
            $table->integer('id_updated')->nullable()->default(null);
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
        Schema::dropIfExists('parkirs');
    }
}
