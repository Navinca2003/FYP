<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('researchGrants.store') }}" method="POST">
                        @csrf

                        <!-- Project Title -->
                        <div class="mb-6">
                            <label for="project_title" class="block font-bold text-lg text-white">Project Title</label>
                            <input type="text" name="project_title" id="project_title" class="form-input block w-full mt-2 rounded-lg shadow-md text-white bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Project Leader -->
                        <div class="mb-6">
                            <label for="project_leader_id" class="block font-bold text-lg text-white">Project Leader</label>
                            <select name="project_leader_id" id="project_leader_id" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                                @foreach ($academicians as $academician)
                                    <option value="{{ $academician->id }}">{{ $academician->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Grant Amount -->
                        <div class="mb-6">
                            <label for="grant_amount" class="block font-bold text-lg text-white">Grant Amount</label>
                            <input type="number" name="grant_amount" id="grant_amount" class="form-input block w-full mt-2 rounded-lg shadow-md text-white bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Grant Provider -->
                        <div class="mb-6">
                            <label for="grant_provider" class="block font-bold text-lg text-white">Grant Provider</label>
                            <input type="text" name="grant_provider" id="grant_provider" class="form-input block w-full mt-2 rounded-lg shadow-md text-white bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-6">
                            <label for="start_date" class="block font-bold text-lg text-white">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-input block w-full mt-2 rounded-lg shadow-md text-white bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Duration in Months -->
                        <div class="mb-6">
                            <label for="duration_months" class="block font-bold text-lg text-white">Duration (Months)</label>
                            <input type="number" name="duration_months" id="duration_months" class="form-input block w-full mt-2 rounded-lg shadow-md text-white bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 text-white rounded-lg shadow-md font-semibold text-lg hover:from-green-600 hover:via-teal-600 hover:to-blue-600 transform transition duration-300">
                                Create Research Grant
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
