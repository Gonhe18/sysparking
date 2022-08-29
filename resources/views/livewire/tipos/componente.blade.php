<div class='container mx-auto mt-2 border-2 border-black rounded-lg'>
   @if ($action == 1)
   <div class="columns-1 border px-5">
      <div class=" py-3 text-center ">
         <h2 class='font-semibold text-2xl'>Tipos de Vehículos</h2>
      </div>
      @include('common.search')
      @include('common.alerts')
      <div class="border flex flex-row">
         <table class="table-fixed border-collapse border border-slate-500 w-full">
            <thead>
               <tr>
                  <th class="border border-slate-600">ID</th>
                  <th class="border border-slate-600">DESCRIPCIÓN</th>
                  <th class="border border-slate-600">CREADO</th>
                  <th class="text-center border border-slate-600">ACCIONES</th>
               </tr>
            </thead>
            <tbody>
               @foreach ( $info as $r)
               <tr>
                  <td>
                     <p class="mb-0">{{$r->id}}</p>
                  </td>
                  <td> {{ $r->descripcion }} </td>
                  <td>{{ $r->created_at }}</td>
                  <td class="text-center">
                     @include('common.actions',[ 'id' => $r->id])
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         {{ $info->links() }}
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