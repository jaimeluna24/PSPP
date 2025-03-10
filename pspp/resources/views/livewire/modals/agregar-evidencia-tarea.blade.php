<div class="w-full flex justify-center">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-3 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Agregar evidencia de tarea
                </h3>
                <button type="button" wire:click="toEvidenciaTareaRetorno()"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form wire:submit.prevent="agregarEvidenciaTarea()" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título de imagen</label>
                        <input type="text" id="email"  spellcheck="true" wire:model="tareaTitulo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            <p class="text-red-600 font-semibold italic">
                                @error('tareaTitulo')
                                {{ $message }}
                                @enderror
                            </p>
                        </div>


                        <div class="">
                            <div>
                                <div class="mb-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Imagen (opcional, la imagen no se guardada)</label>
                                    <input wire:model="tareaEvidencia" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                </div>
                                     <p class="text-red-600 font-semibold italic">
                                        @error('tareaEvidencia')
                                        {{ $message }}
                                        @enderror
                                    </p>
                            </div>
                        </div>


                    <div class="flex items-center p-2 border-t border-gray-200 rounded-b dark:border-gray-600 mt-3">
                        <button data-modal-hide="default-modal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
                        <button data-modal-hide="default-modal" type="button" wire:click="toEvidenciaTareaRetorno()"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                    </div>
                   </form>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
