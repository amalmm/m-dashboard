<x-dashboard-layout>
    <x-slot name="header">
           Demo Create
     </x-slot>

     <x-slot name="body" >
            <x-dashboard-form-card action="{{route('dashboard.demo.store')}}" method="post" >
            <h3 class="text-md font-semibold mb-2">create new data</h3>
                <div class="max-w-lg mb-5">
                    <x-dashboard-form-label for="name" name="Name" />
                    <x-dashboard-form-input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" />
                    <x-dashboard-form-error :error="$errors->first('name')" />
                    </div>

                    <div class="max-w-lg mb-5">
                    <x-dashboard-form-label for="name" name="Name" />
                    <x-dashboard-form-input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" />
                    <x-dashboard-form-error :error="$errors->first('name')" />
                    </div>
                <x-dashboard-form-submit  name="SAVE DATA" />
            </x-dashboard-form-card>
      </x-slot>
</x-dashboard-layout>
