<header x-data="{ stick: false }" class="sticky top-0 z-50 bg-white">
    <div x-data="{ open: false }" :class="{ 'shadow transition duration-200' : stick }" @scroll.window="stick = (window.pageYOffset > 20) ? true : false">
      <div :class="{ 'py-3' : stick, 'py-6' : !stick }" class="flex items-center justify-between px-4 mx-auto duration-200 transition-spacing max-w-7xl sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="/">
            <span class="sr-only">VVA</span>
            <img class="w-auto h-8 sm:h-10" src="@asset('logo')" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <nav class="hidden space-x-10 md:flex">
          
          <div @click.away="open = false" class="relative">
            <button @click="open = !open" type="button" class="inline-flex items-center text-base font-medium text-gray-500 duration-150 border-b-2 border-white group hover:border-blue-300 hover:text-gray-900 focus:text-gray-900" aria-expanded="false">
              <span>Menu Ouvrant</span>
              <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" class="w-5 h-5 ml-2 text-gray-400 transition-transform duration-200 transform group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>

            <div 
              x-show="open" 
              x-transition:enter="transition ease-out duration-200" 
              x-transition:enter-start="opacity-0 translate-y-1" 
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150" 
              x-transition:leave-start="opacity-100 translate-y-0" 
              x-transition:leave-end="opacity-0 translate-y-1" 
              class="absolute z-10 w-screen max-w-md mt-3 -ml-4 transform lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
            >
              <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8 lg:grid-cols-2">
                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md sm:h-12 sm:w-12">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Page 1
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Description 1
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md sm:h-12 sm:w-12">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Page 2
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Description 2
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md sm:h-12 sm:w-12">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Page 3
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Description 3
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md sm:h-12 sm:w-12">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Page 4
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Description 4
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="text-base font-medium text-gray-500 duration-150 border-b-2 border-white hover:border-blue-300 hover:text-gray-900">
            Lien 1
          </a>

          <a href="#" class="text-base font-medium text-gray-500 duration-150 border-b-2 border-white hover:border-blue-300 hover:text-gray-900">
            Lien 2
          </a>
        </nav>
        <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
          @guest
          <a href="/auth/login" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white duration-150 transform bg-blue-500 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:scale-105 hover:shadow hover:bg-blue-600">
            Se connecter
          </a>
          @endguest
          @auth
          <div x-data="{ openPersonnal: false }" class="relative">
            <button @click="openPersonnal = !openPersonnal" type="button" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white duration-150 transform bg-blue-500 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:scale-105 hover:shadow hover:bg-blue-600">
              <span>{{ $nom.' '.$prenom }}</span>
              <svg :class="{ 'rotate-180': openPersonnal, 'rotate-0': !openPersonnal }" class="w-5 h-5 ml-2 text-white transition-transform duration-200 transform group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="openPersonnal" 
              x-transition:enter="transition ease-out duration-200" 
              x-transition:enter-start="opacity-0 translate-y-1" 
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150" 
              x-transition:leave-start="opacity-100 translate-y-0" 
              x-transition:leave-end="opacity-0 translate-y-1" 
              class="absolute z-10 w-screen max-w-sm px-2 mt-3 transform -translate-x-1/2 -left-auto sm:px-0"
            >
              <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                  <a href="/dash" class="flex items-start p-3 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                    <svg class="flex-shrink-0 w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Tableau de Bord
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Description TdB
                      </p>
                    </div>
                  </a>
                </div>
                <div class="justify-center px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                  <div class="flow-root">
                    <a href="/settings/account" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 transition duration-150 ease-in-out rounded-md hover:bg-gray-100">
                      <i class="flex-shrink-0 text-gray-400 fad fa-cog fa-spin fa-swap-opacity fa-lg"></i>
                      <span class="ml-3">Paramètres</span>
                    </a>
                  </div>
          
                  <div class="flow-root">
                    <a href="/auth/logout" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 transition duration-150 ease-in-out rounded-md hover:bg-gray-100">
                      <i class="flex-shrink-0 text-gray-400 fad fa-sign-out fa-lg"></i>
                      <span class="ml-3">Déconnexion</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endauth
        </div>
      </div>

      <div
        x-show="open" 
        x-transition:enter="duration-200 ease-out" 
        x-transition:enter-start="opacity-0 scale-95" 
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in" 
        x-transition:leave-start="opacity-100 scale-100" 
        x-transition:leave-end="opacity-0 scale-95" 
        class="absolute inset-x-0 top-0 z-30 p-2 transition origin-top-right transform md:hidden"
      >
        <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
          <div class="px-5 pt-5 pb-6">
            <div class="flex items-center justify-between">
              <div>
                <img class="w-auto h-8" src="@asset('logo')" alt="VVA">
              </div>
              <div class="-mr-2">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                  <span class="sr-only">Fermer le menu</span>
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Page Mobile 1
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Page Mobile 2
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Page Mobile 3
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-blue-600 rounded-md">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Page Mobile 4
                  </div>
                </a>
              </nav>
            </div>
          </div>
          <div class="px-5 py-6">
            <div class="grid grid-cols-2 gap-4">
              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                Lien Mobile 1
              </a>

              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                Lien Mobile 2
              </a>

            </div>
            {{-- A faire avec session --}}
            <div class="mt-6">
              <a href="/auth/login" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white duration-150 transform bg-blue-500 border border-transparent rounded-md shadow-sm hover:scale-105 hover:bg-blue-600">
                Se connecter
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>