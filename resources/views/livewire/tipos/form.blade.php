<div class="mt-3 mb-4 ml-3 mr-3 border-2 border-black rounded-lg w-80">
   <div class="columns-1 border px-5">
      <div class=" py-3">
         <h5 class='font-semibold text-2xl pb-3'>
            <b>
               @if($selected_id ==0)
               Crear Nuevo Tipo
               @else
               Editar Tipo
               @endif
            </b>
         </h5>

         <!-- @include('common.messages') -->

         <div class="w-5/6">
            <div class="mb-4 ">
               <label class="font-bold text-xl">Descripción</label>
               <div class="flex flex-row mt-1">
                  <div class="">
                     <span class="flex align-center p-4 bg-indigo-500" id="basic-addon1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                              fill="white" />
                           <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="white" />
                        </svg>
                     </span>
                  </div>
                  <input type="text" class="w-full" placeholder="Nombre del tipo" wire:model.lazy="descripcion">
               </div>
            </div>

            <div class="flex flex-row mb-4">
               <label class="font-bold text-xl mr-2">Imagen</label>
               <input type="file" class="" id="image" wire:change="$emit('fileChoosen',this)"
                  accept="image/x-png, image/gif, image/jpeg">
            </div>
         </div>

         <button type="button" wire:click="doAction(1)" class="border-2 border-rose-500 px-6">
            Regresar
         </button>
         <button type=" button" wire:click="StoreOrUpdate()" class="bg-indigo-500 px-6 rounded-sm">
            Guardar
         </button>

      </div>
   </div>
</div>