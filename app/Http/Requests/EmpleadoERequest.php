<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoERequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules()
   {
      return [
         'tipodoc_emp' => 'required|max:50',
         'nrodoc_emp'  => 'required|min:12|max:14|unique:empleados,nrodoc,' . $this->empleado . ',id,deleted_at,NULL',
         'nom_emp'     => 'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/|max:40',
         'ape_emp'     => 'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/|max:40',
         'email_emp'   => 'required|email|max:50|unique:empleados,email,' . $this->empleado . ',id,deleted_at,NULL',
         'gen_emp'     => 'required',
         'cel_emp'     => 'nullable|min:9|max:9',
         'fec_nac'     => 'required|date|date_format:d-m-Y|',
         'cargo_emp'   => 'required',
         'est_emp'     => 'required',
         'imagen_emp'  => 'nullable|image|mimes:jpeg,jpg,png|max:1024'
      ];
   }
}
