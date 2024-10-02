<x-dashboard-layout>
    <x-slot name="header">
           Demo
     </x-slot>

     <x-slot name="body" >
             <x-dashboard-add-new-card route="{{route('dashboard.demo.create')}}" />
             <x-dashboard-all-data-card route="{{route('dashboard.demo.table')}}" title="View All Data" />

       </x-slot>
</x-dashboard-layout>
