<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('trending.movies') }}"><button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                {{ __('voir les films tendance !') }}
            </button></a>
        </h2>
    </x-slot>
</x-app-layout>
