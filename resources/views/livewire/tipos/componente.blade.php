<div class='container mx-auto mt-2 border-2 border-black rounded-lg'>
   @if ($action == 1)

   <div class="columns-1 border px-5">
      <div class=" py-3 text-center ">
         <h2 class='font-semibold text-2xl'>Tipos de Vehículos</h2>
      </div>
      @include('common.search')
      @include('common.alerts')
      <div class="border flex flex-row mb-4">
         <table class="table-auto border-collapse border border-slate-500 w-full">
            <thead>
               <tr>
                  <th class="border">ID</th>
                  <th class="border">DESCRIPCIÓN</th>
                  <th class="border">CREADO</th>
                  <th class="border">ACCIONES</th>
               </tr>
            </thead>
            <tbody>
               @foreach ( $info as $r)
               <tr>
                  <td class="border py-2 text-center">{{$r->id}}</td>
                  <td class="border py-2 text-center"> {{ $r->descripcion }} </td>
                  <td class="border py-2 text-center">{{ $r->created_at }}</td>
                  <td class="border py-2 text-center">
                     @include('common.actions')
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
function confirm(id) {
   let me = this

   Swal.fire({
      title: 'Confirmar',
      text: '¿Desea eliminar el registro?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
      closeOnConfirm: false
   }).then(function() {
      console.log('ID', id);
      window.livewire.emit('deleteRow', id);
      // Configurar
      Toastify({
         text: "Producto agregado al carrito!!",
         duration: 1500,
         gravity: "top",
         position: "right",
         stopOnFocus: false,
         style: {
            background: "##56ab2f",
            background: "-webkit-linear-gradient(to right, #a8e063, #56ab2f)",
            background: "linear-gradient(to right, #a8e063, #56ab2f)",
            color: "#000",
            fontWeight: "bold",
            borderRadius: "10px",
            marginTop: "40px",
            fontSize: "0.9rem",
         },
      }).showToast();
      swal.close()
   })
}
</script>