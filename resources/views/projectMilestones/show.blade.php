<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Milestone Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <div class="space-y-6">
                        <!-- Milestone Name Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Milestone Name:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->milestone_name }}</p>
                        </div>

                        <!-- Research Grant Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Research Grant:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->researchGrant->project_title }}</p>
                        </div>

                        <!-- Target Completion Date Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Target Completion Date:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->target_completion_date }}</p>
                        </div>

                        <!-- Deliverable Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Deliverable:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->deliverable }}</p>
                        </div>

                        <!-- Status Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Status:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->status }}</p>
                        </div>

                        <!-- Remarks Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Remarks:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->remark }}</p>
                        </div>

                        <!-- Last Updated Section -->
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-300">Last Updated:</h3>
                            <p class="text-black dark:text-white bg-gray-200 dark:bg-gray-600 p-2 rounded-md">{{ $projectMilestone->date_updated ? $projectMilestone->date_updated->format('Y-m-d H:i:s') : 'Not Updated' }}</p>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-8">
                        <a href="{{ route('projectMilestones.index') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-800 text-white font-bold rounded-lg shadow-md">
                            Back to Milestones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
