    <div class=" min-h-svh relative ">
    <div class="  w-[350px]       h-full p-4  overflow-y-auto text-left text-gray-500  hidden lg:block  border-r  bg-gray-50">
        {{-- Logo --}}
        <div class="text-xl text-green-500 p-2 font-semibold">{{ config('app.name', 'Laravel') }}</div>


        {{-- profile --}}
        <a href="{{route('profile.edit')}}" >
        <div class="mt-3 flex gap-2 items-center hover:bg-gray-100 " >
           <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-16">
                <path strokeLinecap="round" strokeLinejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
           </div>

           <div >
               <div class="text-sm font-semibold"> {{ Auth::user()->name }}</div>
             <div class="text-sm">{{ Auth::user()->email }}</div>
           </div>
        </div>
        </a>

        {{-- Navigation Links --}}
        <div class="mt-3" id="navLinks">
            <ul class="group p-2 space-y-2">
            @if (Route::has('dashboard.home.index'))
                <li  >

                    <a href="{{ route('dashboard.home.index') }}"
                       class="
                       {{ request()->routeIs('dashboard.home.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                       text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200   rounded-md flex gap-2">
                       <div>
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"  class="w-5">
                            <path strokeLinecap="round" strokeLinejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                       </div>
                        Home
                    </a>
                </li>
           @endif
            @if (Route::has('dashboard.demo.index'))
                <li>
                        <a href="{{route('dashboard.demo.index')}}"
                        class="
                        {{ request()->routeIs('dashboard.demo.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                        text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200   rounded-md flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                              </svg>

                        </div>
                        Demo
                    </a>
                </li>
            @endif
            @if (Route::has('dashboard.design.index'))
            <li>
                    <a href="{{route('dashboard.design.index')}}"
                    class="
                    {{ request()->routeIs('dashboard.design.*') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                    text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200   rounded-md flex gap-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                          </svg>

                    </div>
                    Design
                </a>
            </li>
            @endif
            @if (Route::has('profile.edit'))
            <li>
                    <a href="{{route('profile.edit')}}"
                    class="
                    {{ request()->routeIs('profile.edit') ? 'bg-gray-100 border-l-4' : 'bg-transparent' }}
                    text-gray-900 text-md hover:bg-gray-100 p-2 active:bg-gray-200   rounded-md flex gap-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>


                    </div>
                    profile
                </a>
            </li>
            @endif
            </ul>
        </div>
    </div>


</div>
