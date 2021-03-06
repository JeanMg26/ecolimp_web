<style>
   body {
      font-size: 13px;
   }

   .imagen {
      vertical-align: top;
      top: 0;
      position: relative;
   }

   hr.linea {
      border: 0.1px solid #adb5bd;
   }


   .documento {
      text-align: center;
      font-size: 25px;
      padding: 20px 0px;
   }

   .instalacion,
   .nomproducto {
      text-align: center;
      font-size: 15px;
      padding: 5px 0px;
      background-color: #4dabf7;
   }

   .cabecera {
      text-align: left;
      font-size: 13px;
      padding: 5px;
      background-color: #74c0fc;
   }

   .productos {
      padding: 5px 5px 5px 3px;
   }

   .nom_producto,
   .pres_producto {
      text-align: left;
      padding: 5px;
   }


   .totales {
      text-align: right;
      padding: 5px;
      background-color: #74c0fc;
   }

   .nom_totales {
      text-align: right;
      padding: 5px;
      background-color: #74c0fc;
   }

   #firmas {
      position: absolute;
      bottom: 40px;
   }
</style>

<table width="100%">
   <tr>
      <td class="imagen" rowspan="5" width="25%"><img src="{{ asset('img/ecolimp.png') }}" alt="homepage" width="150" class="light-logo" /> </td>
      <td width="35%">ECO LIMP LTDA.</td>
      <td width="15%"><strong>N° Registro:</strong></td>
      <td width="25%">{{ $salida->codigo }}</td>
   </tr>
   <tr>
      <td><strong>Rut:</strong> 78.954.050-0</td>
      <td width="15%"><strong>Fecha Validez:</strong></td>
      <td width="25%">{{ date('d-m-Y', strtotime($salida->fecha_inicial)) }} - {{ date('d-m-Y', strtotime($salida->fecha_final)) }}</td>
   </tr>
   <tr>
      <td><strong>Dirección:</strong> PEDRO FONTOVA 3726,</td>
      <td><strong>Resp. Registró:</strong></td>
      <td>{{ $salida->usuario_creador->name }}</td>
   </tr>
   <tr>
      <td>CONCHALI, CHILE</td>
      <td><strong>Resp. Entregó:</strong></td>
      <td>{{ $salida->entregado_por }}</td>
   </tr>
   <tr>
      <td><strong>Teléfono:</strong> S/N</td>
      <td><strong>Resp. Recibió:</strong></td>
      <td>{{ $salida->recibido_por }}</td>
   </tr>
</table>

<div style="margin-top: 10px">
   <hr class="linea">
</div>

<div class="documento">
   <strong>ENTREGA DE MATERIALES</strong>
</div>



<table width="100%">
   <tr style="border: 1px solid">
      <td colspan="2" width="50%" class="instalacion"><strong>Datos del Centro de Costo</strong></td>
      <td colspan="2" width="50%" class="instalacion"><strong>Datos del Contacto</strong></td>
   </tr>
   <tr>
      <td width="20%" style="padding-top: 15px; padding-left: 5px"><strong>Nombre:</strong></td>
      <td width="30%" style="padding-top: 15px; padding-right: 5px">{{ $salida->instalacion->nombre }}</td>
      <td width="20%" style="padding-top: 15px; padding-left: 5px"><strong>Nombre:</strong></td>
      <td width="30%" style="padding-top: 15px; padding-right: 5px">{{ $salida->instalacion->nom_contacto }}</td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"><strong>Nombre Fantasia:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->nom_fantasia }}</td>
      <td width="20%" style="padding-left: 5px"><strong>RUT:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->nrodoc_contacto }}</td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"><strong>RUT:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->nrodoc }}</td>
      <td width="20%" style="padding-left: 5px"><strong>Celular:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->cel_contacto }}</td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"><strong>Telefono:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->telefono }}</td>
      <td width="20%" style="padding-left: 5px"><strong>Email:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->email_contacto }}</td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"><strong>Email:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->email }}</td>
      <td width="20%" style="padding-left: 5px"></td>
      <td width="30%" style="padding-right: 5px"></td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"><strong>Dirección:</strong></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->direccion }},</td>
      <td width="20%" style="padding-left: 5px"></td>
      <td width="30%" style="padding-right: 5px"></td>
   </tr>
   <tr>
      <td width="20%" style="padding-left: 5px"></td>
      <td width="30%" style="padding-right: 5px">{{ $salida->instalacion->comuna->nombre }}, CHILE</td>
      <td width="20%" style="padding-left: 5px"></td>
      <td width="30%" style="padding-right: 5px"></td>
   </tr>






</table>

<div style="padding-top: 15px">
   <hr class="linea">
</div>

<table width="100%" style="margin: 30px 0px 80px 0px">
   <thead>
      <tr>
         <th colspan="5" class="nomproducto">PRODUCTOS ENTREGADO</th>
      </tr>
      <tr class="bg-light-blue">
         <th width="10%" class="cabecera" style="text-align: center">N°</th>
         <th width="20%" class="cabecera" style="text-align: center">Cantidad</th>
         <th width="45%" class="cabecera">Producto</th>
         <th width="25%" class="cabecera">Presentación</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($mov_productos as $producto)
      <tr>
         <td class="productos" style="text-align: center">{{ $loop->index + 1  }}</td>
         <td class="productos" style="text-align: center">{{ $producto->cantidad }}</td>
         <td class="nom_producto">{{ $producto->nomProducto }}</td>
         <td class="pres_producto">{{  $producto->presProducto }}</td>
      </tr>

      @endforeach
   </tbody>
</table>





<div>
   <hr class="linea">
</div>

<table width="100%" style="margin-top: 50px">
   <tr>
      <td><strong>Observaciones:</strong></td>
   </tr>
   <tr>
      <td>{{ $salida->observaciones }}</td>
   </tr>
</table>

<table width="100%" style="margin-top: 50px" id="firmas">
   <tr>
      <td width="50%" style="text-align: center">_________________________</td>
      <td width="50%" style="text-align: center">_________________________</td>
   </tr>
   <tr>
      <td width="50%" style="text-align: center"><strong>{{ $salida->entregado_por }}</strong></td>
      <td width="50%" style="text-align: center"><strong>{{ $salida->recibido_por }}</strong></td>
   </tr>
   <tr>
      <td width="50%" style="text-align: center"><strong>ENTREGA</strong></td>
      <td width="50%" style="text-align: center"><strong>RECEPCIÓN</strong></td>
   </tr>
</table>