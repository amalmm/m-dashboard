<x-dashboard-layout>
    <x-slot name="header">
           Demo
     </x-slot>

     <x-slot name="body" >
        <x-dashboard-add-new-card route="{{route('dashboard.demo.create')}}" />
        <x-dashboard-add-new-card route="{{route('dashboard.demo.table')}}" />
     </x-slot>
</x-dashboard-layout>
