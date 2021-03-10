<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    <li><a href="maiden.php" style="">Iron Maiden</a></li>
                    <li><a href="kamelot.php" style=";">Kamelot</a></li>
                    <li><a href="hinris.php" style=";">Hinris</a></li>
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
