<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingreso extends Model
{
   use HasFactory;
   use SoftDeletes;

   protected $table = 'ingresos';
   // protected $fillable = ['nombre', 'estado'];
   protected $guarded = ['id'];

   // **************** Relaciones *******************

   public function usuario_creador()
   {
      return $this->belongsTo('App\Models\User', 'creado_por');
   }

   public function usuario_editor()
   {
      return $this->belongsTo('App\Models\User', 'editado_por');
   }

   public function proveedor()
   {
      return $this->belongsTo(Proveedor::class, 'proveedores_id');
   }

   public function mov_producto()
   {
      return $this->hasMany(MovimientoProducto::class, 'ingresos_id');
   }

   public function condiciones_pago()
   {
      $condicion = $this->condicion_pago;

      switch ($condicion) {
         case 'CONTADO':
            return 'CONTADO';
            break;
         case '30D':
            return 'PAGO A 30 DIAS';
            break;
         case '60D':
            return 'PAGO A 60 DIAS';
            break;
         case '90D':
            return 'PAGO A 90 DIAS';
            break;
         case '':
            return '-----------';
            break;
      }

   }

}
