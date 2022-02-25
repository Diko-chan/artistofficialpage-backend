<x-app-layout>
    <x-slot name="header">
        
    @include('layouts.cards')      
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Commissions
                </div>
            </div>
        </div>
    </div>
    <div class=" jumbotron items-top text-center">
        <h1>Welcome</h1>
        <p>please login for further info</p>
    </div> 
</x-app-layout>
