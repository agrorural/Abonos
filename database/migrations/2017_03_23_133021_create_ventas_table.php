<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('idVen');
            $table->string('cusVen');
            $table->string('regDestVen'); // Región de destino
            $table->timestamp('fecProcVen')->nullable(); //Fecha de Salida de la Isla
            $table->string('provieneVen')->nullable();//Isla de la que proviene
            $table->string('regionVen')->nullable();
            $table->string('latVen')->nullable();
            $table->string('lngVen')->nullable();
            $table->string('zonaVen')->nullable();
            $table->string('lanchonVen')->nullable(); //Embarcación
            $table->string('embVen')->nullable(); //Remolcador
            $table->string('coordFlotVen')->nullable(); //Capitan
            $table->string('puertoVen')->nullable();
            $table->string('latVen2')->nullable(); //Ubicación del Almacén
            $table->string('lngVen2')->nullable();
            $table->string('resProdVen')->nullable(); // Responsable de Producción
            $table->string('admCampVen')->nullable(); // Administrador de Campaña
            $table->string('resAlmVen')->nullable(); // Responsable de Almacén
            $table->string('resDespVen')->nullable(); // Responsable de Despachos
            $table->timestamp('fecSalAlmCli')->nullable(); //Fecha de Salida del Almacén
            $table->string('destCli')->nullable();//Destino
            $table->string('segCli')->nullable();//Segmentos
            $table->string('destLlegadaCli')->nullable();//Llegada
            $table->string('latCli')->nullable();
            $table->string('lngCli')->nullable();
            $table->string('estVen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
