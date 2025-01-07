<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Project Title:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $researchGrant->project_title }}</p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Project Leader:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $researchGrant->projectLeader->name }}</p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Grant Amount:</h3>
                            <p class="text-gray-700 dark:text-gray-300">${{ number_format($researchGrant->grant_amount, 2) }}</p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Grant Provider:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $researchGrant->grant_provider }}</p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Start Date:</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ \Carbon\Carbon::parse($researchGrant->start_date)->format('M d, Y') }}</p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Duration (Months):</h3>
                            <p class="text-gray-700 dark:text-gray-300">{{ $researchGrant->duration_months }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('researchGrants.index') }}" class="btn btn-secondary mt-4 px-6 py-2 bg-gray-300 hover:bg-gray-400 text-white rounded-lg shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
