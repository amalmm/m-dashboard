<x-dashboard-layout>
    <x-slot name="header">
           Design
     </x-slot>

     <x-slot name="body">




         {{-- card --}}
         <div class="flex  ">
            <a href="" class="border rounded-md text-md p-2 lg:px-10 lg:py-7 transition duration-200 hover:shadow-lg hover:bg-gray-100 bg-white">
                <div class="text-center flex flex-col items-center">
                    <svg class="w-10 h-10 mb-2 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <div class="text-gray-900 font-semibold">Add New</div>
                </div>
            </a>
        </div>

         {{-- alert --}}
          <div class=" p-5 bg-yellow-200   rounded-sm text-sm ">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ullam velit cupiditate quisquam voluptatem! Qui nisi quae pariatur nam accusantium vitae veritatis exercitationem aliquam ullam, corrupti quibusdam dolorum vero dignissimos.
         </div>
         {{-- card --}}
          <div >
            <h3 class="text-md font-semibold mb-2">Card</h3>
            <div class="border rounded-md text-md bg-white">
                    <div class="   divide-y flex flex-col">
                        <a href="" class="p-5  ">link</a>
                        <a href="" class="p-5  ">link</a>
                    </div>
            </div>
          </div>

          <x-dashboard-all-data-card route="{{route('dashboard.demo.table')}}" title="View All Data" />

          {{-- card --}}
          <x-dashboard-form-card action="" method="post" >
            <h3 class="text-md font-semibold mb-2">create new data</h3>
            <div class="max-w-lg mb-5">
                <x-dashboard-form-label for="name" name="Name" />
                <x-dashboard-form-input type="text" name="name" value="" placeholder="Full Name" />
                <x-dashboard-form-error :error="$errors->first('name')" />
                </div>

                <div class="max-w-lg mb-5">
                <x-dashboard-form-label for="name" name="Name" />
                <x-dashboard-form-input type="text" name="name" value="" placeholder="Full Name" />
                <x-dashboard-form-error  error="name field required" />
                </div>
            <x-dashboard-form-submit  name="SAVE DATA" />
        </x-dashboard-form-card>

             {{-- card --}}
             <div class=" bg-white rounded-lg border p-5 ">
                     <div class="flex flex-col items-center py-5 ">
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                        class="w-10">
                           <path strokeLinecap="round" strokeLinejoin="round" d="M12 9.75v6.75m0 0-3-3m3 3 3-3m-8.25 6a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                         </svg>
                      </div>
                         <h4>Wix Payments is your complete online payment solution</h4>
                        <a href="" class="text-md text-blue-500">Create New</a>
                    </div>
            </div>

             {{-- card --}}
             <div class="overflow-hidden">
                <h3 class="text-md font-semibold mb-2">Table</h3>
                <div class="  rounded-md text-md bg-white">
                    <table class="min-w-full border-collapse   ">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600">
                                <th class="border  px-5 py-2 text-left">Name</th>
                                <th class="border  px-5 py-2 text-left">Age</th>
                                <th class="border  px-5 py-2 text-left">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border  px-5 py-2">Alice</td>
                                <td class="border  px-5 py-2">30</td>
                                <td class="border  px-5 py-2">alice@example.com</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border  px-5 py-2">Bob</td>
                                <td class="border  px-5 py-2">25</td>
                                <td class="border  px-5 py-2">bob@example.com</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border  px-5 py-2">Charlie</td>
                                <td class="border  px-5 py-2">35</td>
                                <td class="border  px-5 py-2">charlie@example.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="overflow-hidden">
                <!-- Render the generated table HTML -->
                <h3 class="text-md font-semibold mb-2">Table</h3>
                {!! $tableHtml !!}
            </div>
      </x-slot>
</x-dashboard-layout>
