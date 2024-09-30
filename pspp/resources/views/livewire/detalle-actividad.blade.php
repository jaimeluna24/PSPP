<div>

    <div class="flex justify-between border-b-2 b-2 dark:border-gray-500">
        <div>
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                Detalle de Actividad
                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">En progreso</span>
                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Finalizada</span>
            </h5>
        </div>

        <div class="flex gap-3 pl-3">
            <div class="pb-4 bg-white dark:bg-gray-800">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar tarea">
                </div>
            </div>
            <div>
                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-3 gap-5 pt-3">
        <div class="dark:text-white ">
            <div class="grid grid-cols-3 gap-4">
                <div></div>
                <div class="flex justify-center text-xl text-center font-semibold">Actividad</div>
                <div class="flex justify-end">
                    <button data-tooltip-target="tooltip-animation-evidencia-actividad" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example" type="button" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="18" viewBox="0 0 576 512"><path fill="#ffffff" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48M256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48s21.49-48 48-48s48 21.49 48 48m-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160z"/></svg>
                        <span class="sr-only">Notifications</span>
                          <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">8</div>
                    </button>
                </div>
                <div id="tooltip-animation-evidencia-actividad" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Evidencia de actividad
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>

            <p class="font-semibold ">Nombre:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Actividad la ucla se sjdnfke sjdfkjer kdbfhw ijsdbfiweb</p>

            <p class="font-semibold">Descripción:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">esa jnfe fjf lksnfkerf lksdfkjnef</p>

            <p class="font-semibold">Área:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Gerencia de Administración de Mantenimiento</p>

            <p class="font-semibold">Encargado:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Ing. Dennis Vasquez</p>

            <p class="font-semibold ">Fecha de inicio:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Semana #1 - 12/09/2024</p>

            <p class="font-semibold ">Fecha de finalización:</p>
            <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">En progreso</p>
            <div class="flex justify-end">
                <button data-modal-target="popup-modal-actividad" data-modal-toggle="popup-modal-actividad" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-1.5 text-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                <button data-modal-target="popup-modal-finalizar-actividad" data-modal-toggle="popup-modal-finalizar-actividad" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-3 py-1.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Finalizar</button>
            </div>
        </div>
        <div class="border-l pr-5 dark:border-gray-500  pl-5 border-r h-auto">

            <h3 class="text-xl text-center font-semibold dark:text-white">Lista de tareas</h3>
            <div>

                <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700 mt-2">
                    <li class="pb-3 sm:pb-2">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-shrink-0 dark:text-white">
                             {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                              --}}
                              #1
                          </div>
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Mapeo de fibra optica
                             </p>
                             <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Fecha: 20/09/2024
                             </p>
                          </div>
                          <div class="flex-shrink-0 dark:text-white">
                            {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                             --}}
                             <div data-tooltip-target="tooltip-animation-progress" class="w-6 bg-blue-900 text-blue-800 text-xs font-medium me-2 px-0.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20.777a9 9 0 0 1-2.48-.969M14 3.223a9.003 9.003 0 0 1 0 17.554m-9.421-3.684a9 9 0 0 1-1.227-2.592M3.124 10.5c.16-.95.468-1.85.9-2.675l.169-.305m2.714-2.941A9 9 0 0 1 10 3.223M12 8v4m0 4v.01"/></svg>
                            </div>
                            <div id="tooltip-animation-progress" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Tarea en Progreso
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                             <div data-tooltip-target="tooltip-animation-complete" class="w-6 bg-green-900 text-green-800 text-xs font-medium me-2 px-0.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m7 12.5l3 3l7-7"/><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
                             </div>
                             <div id="tooltip-animation-complete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Tarea Finalizada
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                         </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detalles</button>
                          </div>
                       </div>
                    </li>
                    <li class="py-3 sm:py-4">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-shrink-0">
                             <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Neil image">
                          </div>
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Bonnie Green
                             </p>
                             <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                             </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                             $3467
                          </div>
                       </div>
                    </li>
                    <li class="py-3 sm:py-4">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-shrink-0">
                             <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Neil image">
                          </div>
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Michael Gough
                             </p>
                             <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                             </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                             $67
                          </div>
                       </div>
                    </li>
                    <li class="py-3 sm:py-4">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-shrink-0">
                             <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Neil image">
                          </div>
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Thomas Lean
                             </p>
                             <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                             </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                             $2367
                          </div>
                       </div>
                    </li>
                    <li class="pt-3 pb-0 sm:pt-4">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-shrink-0">
                             <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Neil image">
                          </div>
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Lana Byrd
                             </p>
                             <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                             </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                             $367
                          </div>
                       </div>
                    </li>
                </ul>

            </div>
        </div>
        <div>
            <div>
                <div class="dark:text-white ">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex justify-end col-span-2 text-xl text-center font-semibold">Detalle de tarea</div>
                        <div class="flex justify-end">
                            <button data-tooltip-target="tooltip-animation-evidencia-tarea" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example"
                             type="button" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="18" viewBox="0 0 576 512"><path fill="#ffffff" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48M256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48s21.49-48 48-48s48 21.49 48 48m-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160z"/></svg>
                                <span class="sr-only">Notifications</span>
                                  <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">8</div>
                            </button>
                        </div>
                        <div id="tooltip-animation-evidencia-tarea" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Evidencia de tarea
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <p class="font-semibold ">Nombre:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Actividad la ucla se sjdnfke sjdfkjer kdbfhw ijsdbfiweb</p>

                    <p class="font-semibold">Descripción:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">esa jnfe fjf lksnfkerf lksdfkjnef</p>

                    <p class="font-semibold">Resultado:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Gerencia de Administración de Mantenimiento</p>

                    <p class="font-semibold">Observación:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">Ing. Dennis Vasquez</p>

                    <p class="font-semibold ">Fecha de inicio:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">12/09/2024</p>

                    <p class="font-semibold ">Fecha de finalización:</p>
                    <p class="mb-3 text-gray-500 truncate dark:text-gray-400 text-sm">En progreso</p>

                    <div class="flex justify-end">
                        <button data-modal-target="popup-modal-tarea" data-modal-toggle="popup-modal-tarea" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-1.5 text-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                        <button data-modal-target="popup-modal-finalizar-tarea" data-modal-toggle="popup-modal-finalizar-tarea" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-3 py-1.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Finalizar</button>
                    </div>
                </div>
            </div>
            <div class="flex items-center h-auto w-full">
                <div class="w-full flex items-center flex-wrap justify-center gap-10">
                    <div class="grid gap-4 w-60">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="154"
                            height="161" viewBox="0 0 154 161" fill="none">
                            <path
                                d="M0.0616455 84.4268C0.0616455 42.0213 34.435 7.83765 76.6507 7.83765C118.803 7.83765 153.224 42.0055 153.224 84.4268C153.224 102.42 147.026 118.974 136.622 132.034C122.282 150.138 100.367 161 76.6507 161C52.7759 161 30.9882 150.059 16.6633 132.034C6.25961 118.974 0.0616455 102.42 0.0616455 84.4268Z"
                                fill="#EEF2FF" />
                            <path
                                d="M96.8189 0.632498L96.8189 0.632384L96.8083 0.630954C96.2034 0.549581 95.5931 0.5 94.9787 0.5H29.338C22.7112 0.5 17.3394 5.84455 17.3394 12.4473V142.715C17.3394 149.318 22.7112 154.662 29.338 154.662H123.948C130.591 154.662 135.946 149.317 135.946 142.715V38.9309C135.946 38.0244 135.847 37.1334 135.648 36.2586L135.648 36.2584C135.117 33.9309 133.874 31.7686 132.066 30.1333C132.066 30.1331 132.065 30.1329 132.065 30.1327L103.068 3.65203C103.068 3.6519 103.067 3.65177 103.067 3.65164C101.311 2.03526 99.1396 0.995552 96.8189 0.632498Z"
                                fill="white" stroke="#E5E7EB" />
                            <ellipse cx="80.0618" cy="81" rx="28.0342" ry="28.0342"
                                fill="#EEF2FF" />
                            <path
                                d="M99.2393 61.3061L99.2391 61.3058C88.498 50.5808 71.1092 50.5804 60.3835 61.3061C49.6423 72.0316 49.6422 89.4361 60.3832 100.162C71.109 110.903 88.4982 110.903 99.2393 100.162C109.965 89.4363 109.965 72.0317 99.2393 61.3061ZM105.863 54.6832C120.249 69.0695 120.249 92.3985 105.863 106.785C91.4605 121.171 68.1468 121.171 53.7446 106.785C39.3582 92.3987 39.3582 69.0693 53.7446 54.683C68.1468 40.2965 91.4605 40.2966 105.863 54.6832Z"
                                stroke="#E5E7EB" />
                            <path
                                d="M110.782 119.267L102.016 110.492C104.888 108.267 107.476 105.651 109.564 102.955L118.329 111.729L110.782 119.267Z"
                                stroke="#E5E7EB" />
                            <path
                                d="M139.122 125.781L139.122 125.78L123.313 109.988C123.313 109.987 123.313 109.987 123.312 109.986C121.996 108.653 119.849 108.657 118.521 109.985L118.871 110.335L118.521 109.985L109.047 119.459C107.731 120.775 107.735 122.918 109.044 124.247L109.047 124.249L124.858 140.06C128.789 143.992 135.191 143.992 139.122 140.06C143.069 136.113 143.069 129.728 139.122 125.781Z"
                                fill="#A5B4FC" stroke="#818CF8" />
                            <path
                                d="M83.185 87.2285C82.5387 87.2285 82.0027 86.6926 82.0027 86.0305C82.0027 83.3821 77.9987 83.3821 77.9987 86.0305C77.9987 86.6926 77.4627 87.2285 76.8006 87.2285C76.1543 87.2285 75.6183 86.6926 75.6183 86.0305C75.6183 80.2294 84.3831 80.2451 84.3831 86.0305C84.3831 86.6926 83.8471 87.2285 83.185 87.2285Z"
                                fill="#4F46E5" />
                            <path
                                d="M93.3528 77.0926H88.403C87.7409 77.0926 87.2049 76.5567 87.2049 75.8946C87.2049 75.2483 87.7409 74.7123 88.403 74.7123H93.3528C94.0149 74.7123 94.5509 75.2483 94.5509 75.8946C94.5509 76.5567 94.0149 77.0926 93.3528 77.0926Z"
                                fill="#4F46E5" />
                            <path
                                d="M71.5987 77.0925H66.6488C65.9867 77.0925 65.4507 76.5565 65.4507 75.8945C65.4507 75.2481 65.9867 74.7122 66.6488 74.7122H71.5987C72.245 74.7122 72.781 75.2481 72.781 75.8945C72.781 76.5565 72.245 77.0925 71.5987 77.0925Z"
                                fill="#4F46E5" />
                            <rect x="38.3522" y="21.5128" width="41.0256" height="2.73504" rx="1.36752"
                                fill="#4F46E5" />
                            <rect x="38.3522" y="133.65" width="54.7009" height="5.47009" rx="2.73504"
                                fill="#A5B4FC" />
                            <rect x="38.3522" y="29.7179" width="13.6752" height="2.73504" rx="1.36752"
                                fill="#4F46E5" />
                            <circle cx="56.13" cy="31.0854" r="1.36752" fill="#4F46E5" />
                            <circle cx="61.6001" cy="31.0854" r="1.36752" fill="#4F46E5" />
                            <circle cx="67.0702" cy="31.0854" r="1.36752" fill="#4F46E5" />
                        </svg>
                        <div>
                            <h2
                                class="text-center text-black text-xl font-semibold leading-loose pb-2 dark:text-white">
                                Sin selección</h2>
                            <p
                                class="text-center text-black text-base font-normal leading-relaxed pb-4 dark:text-white">
                                Por favor selecciona una tarea </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>

      <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        @include('livewire.crear-tarea')
      </div>

    <div id="popup-modal-actividad" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
       @include('livewire.modals.eliminar-actividad')
    </div>

    <div id="popup-modal-tarea" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        @include('livewire.modals.eliminar-tarea')
     </div>

     <div id="popup-modal-finalizar-actividad" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        @include('livewire.modals.finalizar-actividad')
     </div>

     <div id="popup-modal-finalizar-tarea" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        @include('livewire.modals.finalizar-tarea')
     </div>

     <!-- drawer component -->
     <div id="drawer-example" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">
        @include('livewire.drawers.evidencia-actividad')
     </div>

     <!-- drawer component -->
     <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
       @include('livewire.drawers.evidencia-tarea')
     </div>

     <div id="default-modal-evidencia-actividad-image" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
       @include('livewire.modals.evidencia-image-actividad')
     </div>



</div>
