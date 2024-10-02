    <div class=" min-h-svh relative ">
    <div class="  w-[350px]       h-full p-4  overflow-y-auto text-left text-gray-500  hidden lg:block  border-r  bg-gray-50">
        {{-- Logo --}}
        <div class="text-xl text-gray-900 p-2 font-semibold">{{ config('app.name', 'Laravel') }}</div>


        {{-- Navigation Links --}}
        <div class="mt-3" id="navLinks">
            <ul class="group p-2 space-y-2">
            @if (Route::has('dashboard.home.index'))
                <li>
                    <a href="{{ route('dashboard.home.index') }}"
                       class="
                       {{ request()->routeIs('dashboard.home.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                       text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200 block rounded-md">
                        Home
                    </a>
                </li>
           @endif
            @if (Route::has('dashboard.demo.index'))
                <li>
                        <a href="{{route('dashboard.demo.index')}}"
                        class="
                        {{ request()->routeIs('dashboard.demo.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                        text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200 block rounded-md">
                        Demo
                    </a>
                </li>
            @endif
            @if (Route::has('dashboard.design.index'))
            <li>
                    <a href="{{route('dashboard.design.index')}}"
                    class="
                    {{ request()->routeIs('dashboard.design.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                    text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200 block rounded-md">
                    Design
                </a>
            </li>
            @endif
            @if (Route::has('profile.edit'))
            <li>
                    <a href="{{route('profile.edit')}}"
                    class="
                    {{ request()->routeIs('profile.edit') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                    text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200 block rounded-md">
                    profile
                </a>
            </li>
            @endif
            </ul>
        </div>
    </div>


</div>
