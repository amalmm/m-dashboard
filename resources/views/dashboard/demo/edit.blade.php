<x-dashboard-layout>
    <x-slot name="header">
           Demo Edit
     </x-slot>

     <x-slot name="body" >
            <x-dashboard-form-card action="{{route('dashboard.demo.update',['id'=>$data->id])}}" method="post" >
                @method('put')
            <h3 class="text-md font-semibold mb-2">create new data</h3>

                  <div class="max-w-lg mb-5">
                      <x-dashboard-form-label for="name" name="Name" />
                      <x-dashboard-form-input type="text" name="name" value="{{ old('name', $data->name ) }}" placeholder="Name" />
                      <x-dashboard-form-error :error="$errors->first('name')" />
                    </div>

                    <div class="max-w-lg mb-5">
                        <x-dashboard-form-label for="email" name="email" />
                        <x-dashboard-form-input type="text" name="email" value="{{ old('email' , $data->email ) }}" placeholder="email" />
                        <x-dashboard-form-error :error="$errors->first('email')" />
                      </div>


                <x-dashboard-form-submit  name="SAVE DATA" />
            </x-dashboard-form-card>
      </x-slot>
</x-dashboard-layout>
