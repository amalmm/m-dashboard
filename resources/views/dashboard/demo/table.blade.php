<x-dashboard-layout>
    <x-slot name="header">
           Demo Table
     </x-slot>

     <x-slot name="body" >
        <div class="overflow-hidden">
            <!-- Render the generated table HTML -->
            <h3 class="text-md font-semibold mb-2">Table</h3>
            {!! $tableHtml !!}
        </div>
     </x-slot>
</x-dashboard-layout>
