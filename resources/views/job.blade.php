<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="p-6 bg-slate-700 shadow-md rounded-lg hover:shadow-lg transition-shadow duration-300">
        <h2 class="font-bold text-2xl text-blue-600 mb-2">{{ $job['title'] }}</h2>
        <p class="text-gray-200">
            This job pays <span class="font-semibold text-green-500">{{ $job['salary'] }}</span> per year.
        </p>
        <a href="/jobs" class="text-sky-500 hover:underline">back to jobs...</a>
    </div>
    
</x-layout>
