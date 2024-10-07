<div class="w-full flex justify-center">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Agregar actividad
                </h3>
                <button type="button" wire:click="toActividades()"
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
                <form wire:submit.prevent="create()" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de actividad</label>
                        <input type="text" id="email"  spellcheck="true" wire:model="nombre"
                            class="{{ $errors->has('nombre') ? ' border-red-600 text-red-600' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        <p class="text-red-600 font-semibold italic">
                            @error('nombre')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción de actividad</label>
                        <textarea wire:model="descripcion" id="message" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                        <p class="text-red-600 font-semibold italic">
                            @error('descripcion')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="grid gap-6 mb-3 md:grid-cols-2">
                        <div>
                            <label for="area"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Área</label>
                            <input type="text" id="first_name"  spellcheck="true" wire:model="area"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 required />
                                 <p class="text-red-600 font-semibold italic">
                                    @error('area')
                                    {{ $message }}
                                    @enderror
                                </p>
                        </div>
                        <div>
                            <label for="encargado"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Encargado</label>
                            <input type="text" id="last_name"  spellcheck="true" wire:model="encargado"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                                <p class="text-red-600 font-semibold italic">
                                    @error('encargado')
                                    {{ $message }}
                                    @enderror
                                </p>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-3 md:grid-cols-3">
                        <div>
                            <label for="area"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                            <input type="date" id="first_name" wire:model="fecha_inicio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  />
                                 <p class="text-red-600 font-semibold italic">
                                    @error('fecha_inicio')
                                    {{ $message }}
                                    @enderror
                                </p>
                        </div>

                        {{-- <div class="mb-2 col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Imagen (opcional, la imagen no se guardada)</label>
                            <input wire:model="avatar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                        </div> --}}
                    </div>

                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="default-modal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
                        <button data-modal-hide="default-modal" type="button" wire:click="toActividades()"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                    </div>

                   </form>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
