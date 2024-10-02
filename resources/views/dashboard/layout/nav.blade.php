<div class="  w-[350px]       p-4 bg-black overflow-y-auto text-left text-gray-500  hidden lg:block  ">
    {{-- Logo --}}
    <div class="text-xl text-white p-2">{{ config('app.name', 'Laravel') }}</div>


    {{-- Navigation Links --}}
    <div class="mt-3" id="navLinks">
        <ul class="group p-2 space-y-2">
            <li>
                <a href="{{ route('dashboard.home.index') }}"
                   class="{{ request()->routeIs('dashboard.home.index') ? 'bg-blue-900' : 'bg-transparent' }}
                   text-gray-300 text-md hover:bg-blue-900 p-2 active:bg-gray-700 block rounded-md">
                    Home
                </a>
            </li>
            <li>
                <a href=""
                   class="text-gray-300 text-md hover:bg-blue-900 p-2 active:bg-gray-700 block rounded-md">
                    Profile
                </a>
            </li>
        </ul>
    </div>
</div>

