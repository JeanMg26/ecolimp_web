<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposIngresosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('ingresos', function (Blueprint $table) {
         $table->string('recibido_por')->after('creado_por')->nullable();
         $table->string('estado_pago')->after('fecha_emision')->nullable();
         $table->datetime('fecha_pago')->after('estado_pago')->nullable();
         $table->string('condicion_pago')->after('fecha_pago')->nullable();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::table('ingresos', function (Blueprint $table) {
         //
      });
   }
}
