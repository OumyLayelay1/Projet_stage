<aside class="col-md-3 backend-aside-col">
    <div class="text-center container-aside">
        <div class="mb-3 mt-1 container-user">
            {{ Auth::user()->name }}
        </div>
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex container-lien">
                    <ul class="container-liste-lien">
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('countries.index')" :active="request()->routeIs('countries.index')">
                            {{ __('CRUD Countries') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('restos.index')" :active="request()->routeIs('restos.index')">
                            {{ __('CRUD Restos') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('contactes.index')" :active="request()->routeIs('contactes.index')">
                                {{ __('CRUD Contactes') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('sliders.index')" :active="request()->routeIs('sliders.index')">
                                {{ __('CRUD Sliders') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('logers.index')" :active="request()->routeIs('logers.index')">
                                {{ __('CRUD Logers') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('divertirs.index')" :active="request()->routeIs('divertirs.index')">
                                {{ __('CRUD Divertirs') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('bougers.index')" :active="request()->routeIs('bougers.index')">
                                {{ __('CRUD Bougers') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('cadeaus.index')" :active="request()->routeIs('cadeaus.index')">
                                {{ __('CRUD Cadeaux') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('galleri_images.index')" :active="request()->routeIs('galleri_images.index')">
                                {{ __('CRUD Galleri_images') }}
                            </x-nav-link>
                        </li>
                        <li class="mb-3 container-liste">
                            <x-nav-link :href="route('horaires.index')" :active="request()->routeIs('horaires.index')">
                                {{ __('CRUD Horaires') }}
                            </x-nav-link>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</aside>