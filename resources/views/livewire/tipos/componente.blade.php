<div class='row layout-top-spacing'>
   @if ($action == 1)
   <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
      <div class="widget-content-area br-4">
         <div class="widget-header">
            <div class="row">
               <div class="col-xl-12 text-center">
                  <h5><b>Tipos de Vehículos</b></h5>
               </div>
            </div>
         </div>
      </div>
      @include('common.search')
      @include('common.alerts')
      <div class="table-responsive">
         <table class="table tablebordered table-hover table-striped table-checkable table-highlight-head mb-4">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>DESCRIPCIÓN</th>
                  <th>CREADO</th>
                  <th class="text-center">ACCIONES</th>
               </tr>
            </thead>
            <tbody>
               @foreach ( $info as $t)
               <tr>
                  <td>
                     <p class="mb-0">{{$r->id}}</p>
                  </td>
                  <td> {{ $r->descripcion }} </td>
                  <td>{{ $r->created_at }}</td>
                  <td class="text-center">
                     @include('common.actions')
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         {{ $inflo->links() }}
      </div>
   </div>
</div>

@elseif($action == 2)
@include('livewire.tipos.form')
@endif

<script>
function confirm() {
   let me = this
   swal({
         title: 'Confirmar',
         text: '¿Desea eliminar el registro?',
         type: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonColor: 'Aceptar',
         cancelButtonText: 'Cancelar',
         closeOnConfirm: false
      },
      function() {
         console.log('ID', id);
         window.livewire.emit('deleteRow', id);
         toastr.success('info', 'Registro elminado con éxito');
         swal.close()
      }

   )


}
</script>