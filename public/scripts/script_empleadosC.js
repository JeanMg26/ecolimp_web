$(function () {

   function init() {

      $('#form-empleado').on('submit', function () {

         $('#cargo_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $('#tipodoc_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $('#gen_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $('#est_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

      });

      validations();
      alerts();
      modal();
      events();
   }

   function events() {

      // **************** LLENADO AUTOMATICO DE GUIONES Y PUNTOS AL ESCRIBIR *****************
      $('#nrodoc_emp').mask('00,000,000-0');

      // ************* DESHABILITAR OPTION SELECT ******************
      $('#est_emp option:eq(2)').prop('disabled', true);


      $('#tipodoc_emp').select2({
         width: '100%',
         placeholder: "SELECCIONAR...",
         allowClear: true,
         minimumResultsForSearch: -1,
         language: "es",
      });

      $('#cargo_emp').select2({
         width: '100%',
         placeholder: "SELECCIONAR...",
         allowClear: true,
         language: "es",
      });


      $('#gen_emp').select2({
         width: '100%',
         placeholder: "SELECCIONAR...",
         allowClear: true,
         minimumResultsForSearch: -1,
         language: "es",
      });

      $('#est_emp').select2({
         width: '100%',
         placeholder: "SELECCIONAR...",
         allowClear: true,
         minimumResultsForSearch: -1,
         language: "es",
      });

      // ********** DATEPICKER *******************/
      $('#fec_nac').datepicker({
         format: 'dd-mm-yyyy',
         autoclose: true,
         todayHighlight: true,
         startView: 'years',
         language: "es",
         orientation: 'bottom auto',
      });

      $('#fec_nac').mask('00-00-0000');
   }


   function modal() {

      // **************** MOSTRAR USUARIO Y CONTRASE??A // VALIDAR CAMPOS ****************

      $('#btn-usumodal').on('click', function () {

         $('#prof_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            language: "es",

         }).on("change", function (e) {
            $(this).valid();
         });

         $('#cargo_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            language: "es",

         }).on("change", function (e) {
            $(this).valid();
         });


         $('#tipodoc_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $('#gen_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $('#est_emp').select2({
            width: '100%',
            placeholder: "SELECCIONAR...",
            allowClear: true,
            minimumResultsForSearch: -1,
            language: "es",
         }).on("change", function (e) {
            $(this).valid();
         });

         $("#form-empleado").valid();

         var nombre = $('#nom_emp').val();
         var apellido = $('#ape_emp').val();
         var nrodoc = $('#nrodoc_emp').val();
         var email = $('#email_emp').val();

         if ($("#form-empleado").valid()) {

            var primera_lnombres = nombre.trim().substr(0, 1).toUpperCase();
            var primera_lapellido = apellido.trim().substr(0, 1).toUpperCase();
            var correo = email.trim().toUpperCase();

            // var nombre_usuario = primera_lnombres + primer_apellido;
            var nombre_usuario = nrodoc.replace(/[-,]/g, '');
            var clave = primera_lapellido + primera_lnombres + nombre_usuario;

            $("#usuario").text(nombre_usuario);
            $("#correo").text(correo);
            $('#clave').text(clave);

            $('#viewUser').modal('show');
         }

      });
   }


   function validations() {

      const reglas = {
         'nrodoc_emp': {
            required: true,
            minlength: 12,
            maxlength: 14,
         },
         'nom_emp': {
            required: true,
         },
         'ape_emp': {
            required: true,
         },
         'email_emp': {
            required: true,
            email: true,
         },
         'tipodoc_emp': {
            required: true,
         },
         'fec_nac': {
            required: true,
            // validDate: true,
         },
         'gen_emp': {
            required: true,
         },
         'prof_emp': {
            required: true,
         },
         'cargo_emp': {
            required: true,
         },
         'equipo_emp': {
            required: true,
         },
         'cel_emp': {
            minlength: 9,
            maxlength: 9,
         },
         'est_emp': {
            required: true,
         },

      };

      const mensajes = {
         'nrodoc_emp': {
            required: 'Ingresar el n??mero de documento.',
            minlength: 'El n??mero de documento tiene que tener como m??nimo 12 caracteres.',
            maxlength: 'El n??mero de documento tiene que tener como m??ximo 14 caracteres.',
         },
         'nom_emp': {
            required: 'Ingresar el nombre del empleado.',
         },
         'ape_emp': {
            required: 'Ingresar el apellido del empleado.',
         },
         'email_emp': {
            required: 'Ingresar un correo electronico.',
            email: 'El correo electronico no es v??lido.',
         },
         'tipodoc_emp': {
            required: 'Seleccionar un tipo de documento.',
         },
         'fec_nac': {
            required: 'Ingresar su fecha de nacimiento.',
         },
         'gen_emp': {
            required: 'Seleccionar un tipo de g??nero.',
         },
         'prof_emp': {
            required: 'Seleccionar una profesi??n.',
         },
         'cargo_emp': {
            required: 'Seleccionar un cargo.',
         },
         'equipo_emp': {
            required: 'Seleccionar un equipo.',
         },
         'cel_emp': {
            minlength: 'El celular debe tener como m??nimo 9 caracteres.',
            maxlength: 'El celular debe tener como m??ximo 9 caracteres.',
         },
         'est_emp': {
            required: 'Seleccionar el estado del empleado.',
         },

      };

      Ecolimp.validacionGeneral('form-empleado', reglas, mensajes);

   }



   function alerts() {

      // *********** OCULTAR ALERTAS DE ERRORES SERVER-SIDE **************

      $('#tipodoc_emp').on('change', function () {
         if (this.value == '') {
            if ($(this).parent().find('.alert').length) {
               $('#tipodoc_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error-select2');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#tipodtipodoc_empoc_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error-select2');
            }
         }
      });

      $('#nrodoc_emp').on('keyup', function () {
         if ($(this).val().length) {
            if ($(this).parent().parent().find('.alert').length) {
               $('#nrodoc_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error');
            }
         } else {
            if ($(this).parent().parent().find('.alert').length) {
               $('#nrodoc_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error');
            }
         }
      });

      $("#fec_nac").on("change", function () {
         if ($("#fec_nac-error").text() != "") {
            if ($(this).val().length) {
               $("#fec_nac-error").addClass("d-none");
               $("#fec_nac").removeClass("is-invalid");
            } else {
               $("#fec_nac-error").removeClass("d-none");
               $("#fec_nac").addClass("is-invalid");
            }
         }
      });

      $('#nom_emp').on('keyup', function () {
         if ($(this).val().length) {
            if ($(this).parent().find('.alert').length) {
               $('#nom_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#nom_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error');
            }
         }
      });

      $('#ape_emp').on('keyup', function () {
         if ($(this).val().length) {
            if ($(this).parent().find('.alert').length) {
               $('#ape_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#ape_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error');
            }
         }
      });

      $('#email_emp').on('keyup', function () {
         if ($(this).val().length) {
            if ($(this).parent().parent().find('.alert').length) {
               $('#email_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error');
            }
         } else {
            if ($(this).parent().parent().find('.alert').length) {
               $('#email_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error');
            }
         }
      });

      $('#gen_emp').on('change', function () {
         if ($(this).val() == '') {
            if ($(this).parent().find('.alert').length) {
               $('#gen_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error-select2');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#gen_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error-select2');
            }
         }
      });

      $('#cargo_emp').on('change', function () {
         if ($(this).val() == '') {
            if ($(this).parent().find('.alert').length) {
               $('#cargo_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error-select2');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#cargo_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error-select2');
            }
         }
      });

      $('#cel_emp').on('keyup', function () {
         if ($(this).val().length) {
            if ($(this).parent().parent().find('.alert').length) {
               $('#cel_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error');
            }
         } else {
            if ($(this).parent().parent().find('.alert').length) {
               $('#cel_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error');
            }
         }
      });


      $('#est_emp').on('change', function () {
         if ($(this).val() == '') {
            if ($(this).parent().find('.alert').length) {
               $('#est_emp-error').removeClass('d-none');
               $(this).parent().addClass(' has-error-select2');
            }
         } else {
            if ($(this).parent().find('.alert').length) {
               $('#est_emp-error').addClass('d-none');
               $(this).parent().removeClass(' has-error-select2');
            }
         }
      });
   }



   init();



})