<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <!-- Project Title Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Project Title:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $researchGrant->project_title }}</p>
                        </div>

                        <!-- Project Leader Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Project Leader:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $researchGrant->projectLeader->name }}</p>
                        </div>

                        <!-- Grant Amount Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Grant Amount:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">${{ number_format($researchGrant->grant_amount, 2) }}</p>
                        </div>

                        <!-- Grant Provider Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Grant Provider:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $researchGrant->grant_provider }}</p>
                        </div>

                        <!-- Start Date Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Start Date:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ \Carbon\Carbon::parse($researchGrant->start_date)->format('M d, Y') }}</p>
                        </div>

                        <!-- Duration Section -->
                        <div class="bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Duration (Months):</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $researchGrant->duration_months }}</p>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-8">
                        <a href="{{ route('researchGrants.index') }}" class="px-6 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 hover:from-green-600 hover:via-teal-600 hover:to-blue-600 text-white font-bold rounded-lg shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
