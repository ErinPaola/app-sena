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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tipo_identificacion')->after('id');
            $table->string('numero_identificacion')->after('id_tipo_identificacion');
            $table->string('segundo_nombre')->nullable()->after('primer_nombre');
            $table->string('primer_apellido')->after('segundo_nombre');
            $table->string('segundo_apellido')->nullable()->after('primer_apellido');
            $table->longText('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
