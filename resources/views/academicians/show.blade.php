<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Academician') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <!-- Name Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Name:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->name }}</p>
                        </div>

                        <!-- Staff Number Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Staff Number:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->staff_number }}</p>
                        </div>

                        <!-- Email Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Email:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->email }}</p>
                        </div>

                        <!-- College Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">College:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->college }}</p>
                        </div>

                        <!-- Department Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Department:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->department }}</p>
                        </div>

                        <!-- Position Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Position:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $academician->position }}</p>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-8">
                        <a href="{{ route('academicians.index') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-800 text-white font-bold rounded-lg shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
