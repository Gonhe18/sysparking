<div class="flex justify-center mb-4 mt-3">
   <div class="w-full px-20">
      <div class="flex flex-row ">
         <label class="w-full">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
               <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20">
               </svg>
            </span>
            <input
               class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
               placeholder="Buscar" type="text" name="search" />
         </label>
         <button type="submit" wire:click='doAction(2)'
            class="text-white   bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
      </div>
   </div>

   <div class="flex align-center justify-center w-full mr-2">
      <button type="button" wire:click='doAction(2)' class="bg-indigo-500 px-5 rounded-lg">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
               d="M3 5C3 3.34315 4.34315 2 6 2H14C17.866 2 21 5.13401 21 9V19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V5ZM13 4H6C5.44772 4 5 4.44772 5 5V19C5 19.5523 5.44772 20 6 20H18C18.5523 20 19 19.5523 19 19V9H13V4ZM18.584 7C17.9413 5.52906 16.6113 4.4271 15 4.10002V7H18.584Z"
               fill="currentColor" />
         </svg>
      </button>
   </div>
</div>